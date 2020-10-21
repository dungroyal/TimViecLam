<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function index()
    {
        if (session('admin')) {
            return view('admin.index');
        }else{
            return redirect('/admin/login');
        }
    }
    function login()
    {
        return view('admin.login');

    }
}
