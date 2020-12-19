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
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request){
        $keyword = $request->get('keyword');
        $career = $request->get('career');
        $city = $request->get('city');


        $type = $request->get('type');
        $category = $request->get('category_id');
        $address = $request->get('address');

        if($keyword && $career && $city){
            $jobs = Job::where('name_job','LIKE','%'.$keyword.'%')
                    ->Where('career_id','=',$career)
                    ->Where('city','=',$city)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }

        if($keyword && $career){
            $jobs = Job::where('name_job','LIKE','%'.$keyword.'%')
                    ->Where('career_id','=',$career)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }

        if($career && $city){
            $jobs = Job::Where('career_id','=',$career)
                    ->Where('city','=',$city)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }
        
        if($keyword){
            $jobs = Job::where('name_job','LIKE','%'.$keyword.'%')
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }

        if($career){
            $jobs = Job::where('career_id','=',$career)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }

        if($city){
            $jobs = Job::where('city','=',$city)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }

        if($keyword||$career||$city){
            $jobs = Job::where('name_job','LIKE','%'.$keyword.'%')
                    ->orWhere('career_id',$career)
                    ->orWhere('city',$city)
                    ->where('status','!=',0)
                    ->paginate(20);
            return view('home.job',compact('jobs'));
        }else{
            $jobs = Job::latest()->paginate(10);
            return view('home.job',compact('jobs'));
        }
        

    }

    public function searchJob(Request $request){
        $keyword = $request->get('txtKeyword');
        $career = $request->get('career');
        $city = $request->get('city');

        $data = Job::where('name_job','like','%'.$keyword.'%')
                ->orWhere('career_id',$career)
                ->orWhere('city',$city)
                ->limit(10)->get();
        return view('home.element.jobsListItems',['jobs' => $data]);
    }

    public function allJob(Request $request){
        $data = Job::latest()->paginate(10);
        return view('home.element.jobsListItems',['jobs' => $data]);
    }

    public function job_detail($id)
    {
        $jobs_detail = Job::findOrFail($id);
        $jobs_detail->increments('view');
        // $jobs_detail->view = ($jobs_detail->view)+1;
        $jobs_detail->save();
        $company = Company::findOrFail($jobs_detail->company_id);
        $listJob = Job::Where('company_id',$jobs_detail->company_id)->orderBy('id', 'desc')->get();
        return view('home/job_detail',compact('jobs_detail','company','listJob'));
    }

    public function job_detail_ajax($id)
    {
        $jobs_detail = Job::findOrFail($id);
        $jobs_detail->increments('view');
        // $jobs_detail->view = ($jobs_detail->view)+1;
        $jobs_detail->save();
        $company = Company::findOrFail($jobs_detail->company_id);
        $listJob = Job::Where('company_id',$jobs_detail->company_id)->orderBy('id', 'desc')->get();
        return view('home.element.jobDetail',compact('jobs_detail','company','listJob'));
    }
}