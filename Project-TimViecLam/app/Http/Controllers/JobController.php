<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
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
            $jobs = Job::latest()->paginate(20);
            return view('home.job',compact('jobs'));
        }
    }

    public function AllJobs(Request $request){
        $data = Job::limit(10)->get();
        return view('home.element.jobsListItems',['jobs' => $data]);
    }
    
    public function searchJobs(Request $request){
        $keyword = $request->get('keyword');
        $users = Job::where('title','like','%'.$keyword.'%')
                ->orWhere('position','like','%'.$keyword.'%')
                ->limit(5)->get();
        return response()->json($users);
    }

    public function job_detail($id)
    {
        $jobs_detail = Job::findOrFail($id);
        return view('home/job_detail',compact('jobs_detail'));
    }

    public function job_detail_ajax($id)
    {
        $data = Job::findOrFail($id);
        return view('home.element.jobDetail',['jobs_detail' => $data]);
    }
}