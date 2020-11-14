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
            $this->id = Auth::guard('employer')->user()->id;
            return $next($request);
        });
    }

    public function index()
    {
        return view('
        employer.dashboard', [
            'employer' => Auth::guard('employer')->user(),
            'company' => DB::table('companies')->select('name_company', 'logo')->where('employer_id', $this->id)->first()
        ]);
    }

    public function company()
    {
        return view('
            employer.page.company',[
                'employer' => Auth::guard('employer')->user(),
                'company' => DB::table('companies')->where('employer_id', $this->id)->first()
        ]);
    }

    public function showCreateJobPostForm()
    {
        return view('
            employer.page.create_job',[
                'employer' => Auth::guard('employer')->user(),
                'company' => DB::table('companies')->where('employer_id', $this->id)->first()
        ]);
    }

    public function CreateJobPost()
    {
        return view('
            employer.page.create_job',[
                'employer' => Auth::guard('employer')->user(),
                'company' => DB::table('companies')->where('employer_id', $this->id)->first()
        ]);
    }
    
}
