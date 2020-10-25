<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->careers = DB::table('career')->get();
        $this->top_careers = DB::table('career')->limit(4)->get();
        $this->db_city = DB::table('db_city')->get();
    }

    public function index()
    {
        return view('home/index', ['careers' => $this->careers,'top_careers' => $this->top_careers,'db_city' => $this->db_city]);
    }    
}
