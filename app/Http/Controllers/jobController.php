<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class jobController extends Controller
{
    function index()
    {
        return view('home.job');
    }
}
