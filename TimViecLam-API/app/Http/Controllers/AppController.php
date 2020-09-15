<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function employer()
    {
        return view('employer.employer');
    }

    public function job_seeker()
    {
        return view('job_seeker.job_seeker');
    }
}
