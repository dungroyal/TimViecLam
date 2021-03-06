<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use App\Models\Job;
use App\Models\Company;
use App\Models\Profiles;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guar:api');
    }

    public function index()
    {
        $new_jobs = Job::where('status',1)->latest()->paginate(8);
        $jobs_recommend = Job::where('status',1)->orderBy('view', 'desc')->paginate(8);
       
    	return view('home/index',compact('new_jobs','jobs_recommend'));
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

    public function profiles(Request $request)
    {
        $career = $request->get('career');
        $city = $request->get('city');
        $salary = $request->get('salary');
        $experience = $request->get('experience');
        $degree = $request->get('degree');

        $profiles = Profiles::when($career, function ($query, $career) {
                        return $query->where('career_id', $career);
                    }) 
                    ->when($city, function ($query, $city) {
                        return $query->where('work_location', $city);
                    }) 
                    ->when($salary, function ($query, $salary) {
                        return $query->where('salary_id', $salary);
                    }) 
                    ->when($experience, function ($query, $experience) {
                        return $query->where('experience_id', $experience);
                    }) 
                    ->when($degree, function ($query, $degree) {
                        return $query->where('degree_id', $degree);
                    })
                    ->where('status',1)
                    ->paginate(5);
        return view('home.profiles',compact('profiles','request'));
    }

    public function profileDetail($id)
    {
        $Profile = Profiles::findOrFail($id);
        $Profile->view = ($Profile->view)+1;
        $Profile->save();
        $JobSeeker = JobSeeker::findOrFail($Profile->job_seeker_id);
        return view('home.profileDetail',compact('Profile','JobSeeker'));
    }


    public function blog(){
        return view('home.blog.blog');
    }

    public function blogDetail(){
        return view('home.blog.blog-detail');
    }

    public function about(){
        return view('home.pages.about');
    }

    public function privacy(){
        return view('home.pages.privacy');
    }

    public function TermsOfUse(){
        return view('home.pages.termsOfUse');
    }

    public function security(){
        return view('home.pages.security');
    }
}
