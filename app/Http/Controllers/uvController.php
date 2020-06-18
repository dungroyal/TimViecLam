<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uvController extends Controller
{
    function index()
    {
        return view('ungvien.index');
    }
}
