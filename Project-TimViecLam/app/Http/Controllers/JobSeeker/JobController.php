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
}
