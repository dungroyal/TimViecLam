<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class homeController extends Controller
{
    function index()
    {
        return view('home.index');
    }

    function contact()
    {
        return view('home.contact');
    }
    
    function about()
    {
        return view('home.about');
    }

    function dang_nhap()
    {
        return view('home.dang_nhap');
    }

    function dang_ky()
    {
        return view('home.dang_ky');
    }

}
