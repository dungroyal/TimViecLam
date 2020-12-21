<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\Company;
use Yajra\Datatables\Datatables;

class JobController extends Controller
{
    public function index(Request $request){
        $keyword = $request->get('keyword');
        $career = $request->get('career');
        $city = $request->get('city');

        $jobs = Job::where('status',1)
                    ->when($keyword, function ($query, $keyword) {
                        return $query->where('name_job','LIKE','%'.$keyword.'%');
                    })
                    ->when($career, function ($query, $career) {
                        return $query->where('career_id', $career);
                    }) 
                    ->when($city, function ($query, $city) {
                        return $query->where('city', $city);
                    })
                    ->paginate(15);
        return view('home.job',compact('jobs'));   
    }

    public function searchJob(Request $request){
        $keyword = $request->get('txtKeyword');
        $career = $request->get('career');
        $city = $request->get('city');

        $data = Job::where('status',1)
                ->where('name_job','like','%'.$keyword.'%')
                ->orWhere('career_id',$career)
                ->orWhere('city',$city)
                ->get();
        return view('home.element.jobsListItems',['jobs' => $data]);
    }

    public function allJob(Request $request){
        $data = Job::where('status',1)->latest()->get();
        return view('home.element.jobsListItems',['jobs' => $data]);
    }

    public function job_detail($id)
    {
        $jobs_detail = Job::findOrFail($id);
        $jobs_detail->view = $jobs_detail->view++;
        $jobs_detail->save();
        $company = Company::findOrFail($jobs_detail->company_id);
        $listJob = Job::where('status',1)->Where('company_id',$jobs_detail->company_id)->orderBy('id', 'desc')->get();
        return view('home/job_detail',compact('jobs_detail','company','listJob'));
    }

    public function job_detail_ajax($id)
    {
        $jobs_detail = Job::findOrFail($id);
        $jobs_detail->view = $jobs_detail->view++;
        $jobs_detail->save();
        $company = Company::findOrFail($jobs_detail->company_id);
        $listJob = Job::where('status',1)->Where('company_id',$jobs_detail->company_id)->orderBy('id', 'desc')->get();
        return view('home.element.jobDetail',compact('jobs_detail','company','listJob'));
    }
}