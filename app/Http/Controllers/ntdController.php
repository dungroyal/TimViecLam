<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ntdController extends Controller
{
    
    function index()
    {
        if (session('nhatuyendung')) {
            return view('nhatuyendung.index');
        }else{
            return redirect('/dang-nhap/ntd');
        }
        
    }
}
