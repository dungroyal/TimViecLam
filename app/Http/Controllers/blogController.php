<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class blogController extends Controller
{
    function index()
    {
        return view('home.blog');
    }
}
