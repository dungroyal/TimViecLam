<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uvController extends Controller
{
    function index()
    {
        if (session('ungvien')) {
            return view('ungvien.index');
        }else{
            return redirect('/dang-nhap/uv');
        }
    }
}
