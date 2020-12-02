<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

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
}
