<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guar:api');
    }

    public function index()
    {
        return view('home/index');
    } 

    public function landingPageEmployer()
    {
        return view('home/landingPageEmployer');
    } 
}
