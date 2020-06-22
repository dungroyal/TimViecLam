<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nghanhnghe;

class homeController extends Controller
{
    function __construct()
    {
        $this->Nghanhnghe=Nghanhnghe::all();
    }

    function index()
    {
        return view('home.index',['Nghanhnghe'=>$this->Nghanhnghe]);
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


    function dang_nhap_ntd()
    {
        return view('home.auth.dang_nhap_ntd');
    }


    function dang_nhap_uv()
    {
        return view('home.auth.dang_nhap_uv');
    }

    function dang_ky()
    {
        return view('home.dang_ky');
    }
    function dang_ky_ntd()
    {
        return view('home.auth.dang_ky_ntd');
    }
    function dang_ky_uv()
    {
        return view('home.auth.dang_ky_uv');
    }

    function cong_ty($id)
        {
            return view('home.congty');
        }

}
