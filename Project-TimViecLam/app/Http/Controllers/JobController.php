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

    public function index()
    {
        return view('home/job');
    }  
    public function job_detail()
    {
        return view('home/Job_detail');
    }
}