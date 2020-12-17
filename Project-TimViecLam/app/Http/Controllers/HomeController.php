<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use App\Models\Job;
use App\Models\Company;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guar:api');
    }

    public function index()
    {
        $jobs_urgently = DB::table('job')
            ->where('job.status',3)
            ->join('companies', 'job.company_id', '=', 'companies.id')
            ->join('city', 'job.city', '=', 'city.id')
            ->join('salary', 'job.salary_id', '=', 'salary.id')
            ->select('job.name_job', 'companies.name_company', 'companies.logo', 'companies.id', 'city.name as city', 'salary.name as salary')
            ->paginate(8);

        $jobs_hot = DB::table('job')
            ->where('job.status',2)
            ->join('companies', 'job.company_id', '=', 'companies.id')
            ->join('city', 'job.city', '=', 'city.id')
            ->join('salary', 'job.salary_id', '=', 'salary.id')
            ->select('job.name_job', 'companies.name_company', 'companies.logo', 'companies.id', 'city.name as city', 'salary.name as salary')
            ->paginate(8);

        $all_jobs = Job::latest()->where('status',1)->paginate(8);
        $jobs_recommend = Job::latest()->where('status',3)->paginate(8); // Việc làm gấp    
        // $companies = Company::get()->random(10);
       
    	return view('home/index',compact('all_jobs','jobs_hot','jobs_urgently','jobs_recommend'));
    } 

    public function landingPageEmployer()
    {
        return view('home/landingPageEmployer');
    } 

    
    public function searchJobView($val)
    {
        Cookie::queue(Cookie::make('searchJobView', $val, 100000));
        return Redirect::back()->with('message','Đã đỗi chế độ xem!');
    }

    public function company($id)
    {
        $company = Company::findOrFail($id);
        $listJob = Job::Where('company_id',$id)->orderBy('id', 'desc')->get();
        return view('home/company',compact('company','listJob'));
    }

    public function profiles()
    {
        return view('home/profiles');
    }

    public function profileDetail($id)
    {
        return view('home/profileDetail');
    }
    
}
