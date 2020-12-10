<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:job_seeker');
    }
    
    public function applyJob(Request $request,$id){
        $jobId = Job::find($id);
        $jobId->job_seeker()->attach(Auth::guard('job_seeker')->user()->id,['employer_id' => $jobId->employer_id,'status' => 1]);
        return redirect()->back()->with('message','Ứng tuyển thành công!');
    }

    public function listApplyJob()
    {
        return view('job_seeker.page.listJobApply');
    }
    
    public function listApplyJobData(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('apply')->where('job_seeker_id',Auth::guard('job_seeker')->user()->id)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name_jsk', function($row){
                    return \App\JobSeeker::find($row->job_seeker_id)->name;
                })
                ->addColumn('name_job', function($row){
                    return \App\Models\Job::find($row->job_id)->name_job;
                })
                ->addColumn('status', function($row){
                    if ($row->status == 1) {
                        $status = '<span class="badge badge-pill badge-danger">Mới</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đã xác minh</span>';
                    }
                    return $status;
                })
                ->addColumn('date', function($row){
                    $now = Carbon::now('Asia/Ho_Chi_Minh');
                    $updated_at =  Carbon::parse($row->updated_at);
                    return $updated_at->diffForHumans($now);
                })
                ->addColumn('action', function($row){
                    $id_jsk=\App\JobSeeker::find($row->job_seeker_id)->id;
                    $actionBtn = '<button onclick="showModal('.$id_jsk.')" type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-xl"><i class="far fa-eye"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['name_jsk','name_job','status','date','action'])
                ->make(true);
        }
    }

    public function jobSuitable(Request $request)
    {
        if ($request->ajax()) {
            $listJobSuitable = $this->listJobSuitable();
            return Datatables::of($listJobSuitable)
                ->addIndexColumn()
                ->addColumn('infoJob', function($row){
                    $nameCompany = DB::table('companies')->find($row->company_id)->name_company;
                    $data = ' <div><a href="/job-detail/'.$row->id.'" target="_blank" class="datatable-name-job">'.$row->name_job.'</a> </br>
                            <div class="datatable-name-company small">'.$nameCompany.'</div></div>';
                    return $data;
                })
                ->addColumn('location', function($row){
                    $location = DB::table('city')->find($row->city)->name;
                    return $location;
                })
                ->addColumn('salary', function($row){
                    $salary = DB::table('salary')->find($row->salary_id)->name;
                    return $salary;
                })
                
                ->addColumn('last_day', function($row){
                    $Deadline = Carbon::parse($row->deadline);
                    return $Deadline->format('d/m');
                })
                ->rawColumns(['infoJob','location','salary','last_day'])
                ->make(true);
        }
        return view('job_seeker.page.jobSuitable');
    }



    public function listJobSuitable(){
        $profiles = DB::table('profiles')->where('job_seeker_id', Auth::guard('job_seeker')->user()->id)->first();

        $data = [];
        
        $jobsBasedOnCareer = Job::latest()
                                ->where('career_id',$profiles->career_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobsBasedOnCareer);
                           
        $jobBasedOnLocation = Job::latest()
                                ->where('city',$profiles->work_location)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnLocation);

        $jobBasedOnSalary = Job::latest()
                                ->where('salary_id',$profiles->salary_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnSalary);

        $jobBasedOnTypeJob = Job::latest()
                                ->where('type_job_id',$profiles->type_job_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnTypeJob);

        $jobBasedOnGrade = Job::latest()
                                ->where('grade_id',$profiles->grade_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnGrade);
        
        $jobBasedOnDegree = Job::latest()
                                ->where('degree_id',$profiles->degree_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnDegree);

        $jobBasedOnExperience = Job::latest()
                                ->where('experience_id',$profiles->experience_id)
                                ->whereDate('deadline','>',date('Y-m-d'))
                                ->where('status','<>',0)
                                ->get();
        array_push($data,$jobBasedOnExperience);

       $collection  = collect($data);
       $unique = $collection->unique("id");
       $jobRecommendations =  $unique->values()->first();
       return $jobRecommendations;
    }
}
