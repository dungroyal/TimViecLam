<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ntdController extends Controller
{
    function index()
    {
        return view('nhatuyendung.index');
    }
}
