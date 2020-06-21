<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ntdController extends Controller
{
    function index()
    {
        return view('nhatuyendung.index');
    }
    function tuyendungmoi()
    {   
       
        return view('nhatuyendung/dangtuyendung');
    }
    function alltintuyendung()
    {   
       
        return view('nhatuyendung/alltin');
    }
    function searchvien()
    {   
       
        return view('nhatuyendung/searchungvien');
    }
    function hsdaluu()
    {   
       
        return view('nhatuyendung/hsdaluu');
    }
    function hsdaxem()
    {   
       
        return view('nhatuyendung/hsdaxem');
    }
    function hsungtuyen()
    {   
       
        return view('nhatuyendung/hsungtuyen');
    }
    function thongtin()
    {   
       
        return view('nhatuyendung/thongtin');
    }
    function matkhau()
    {   
       
        return view('nhatuyendung/doimatkhau');
    }

}
