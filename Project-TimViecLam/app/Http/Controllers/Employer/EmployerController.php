<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
        $this->middleware(function ($request, $next) {
            // Get all data of Employer and Company
            $this->idEmployer = Auth::guard('employer')->user()->id;
            $company = DB::table('companies')->where('employer_id', $this->idEmployer)->first();
            $employer = Auth::guard('employer')->user();
            $collection = collect($company);
            $data = $collection->merge($employer);
            $this->data_company =  $data->all();

            return $next($request);
        });
    }

    public function index()
    {
        $info_company = $this->data_company;
        return view(' employer.dashboard',compact('info_company'));
    }

    public function company()
    {
        $info_company = $this->data_company;
        return view('employer.page.company',compact('info_company'));
    }
}
