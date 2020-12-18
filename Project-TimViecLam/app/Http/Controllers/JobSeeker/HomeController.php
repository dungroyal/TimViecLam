<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:job_seeker');
    }

    public function index()
    {
        return view('job_seeker.dashboard');
    }

    public function account()
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        return view('job_seeker.page.account',compact('JobSeeker','Profile'));
    }
}
