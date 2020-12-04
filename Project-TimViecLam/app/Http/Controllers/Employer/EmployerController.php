<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use App\JobSeeker;

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
        return view('employer.dashboard',compact('info_company'));
    }

    public function company()
    {
        $info_company = $this->data_company;
        return view('employer.page.company',compact('info_company'));
    }

    public function listProfileApply()
    {
        $info_company = $this->data_company;
        return view('employer.page.listProfileApply',compact('info_company'));
    }

    public function jobSeekerById($id)
    {
        $jobSeekerById = JobSeeker::findOrFail($id);
        $profile = DB::table('profiles')->where('job_seeker_id', $id)->first();
        return view('employer.element.profileJobSeeker',compact('jobSeekerById','profile'));
    }
    
    public function listProfileApplyData(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('apply')->where('employer_id',Auth::guard('employer')->user()->id)->get();
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
