<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uvController extends Controller
{
    function index()
    {
        return view('ungvien.index');
    }
    function quanlyhs()
    {
        return view('ungvien/quanlyhs');
    }
    function ungtuyen()
    {
        return view('ungvien/vieclamdaungtuyen');
    }
    function daluu()
    {
        return view('ungvien/vieclamdaluu');
    }
    function daxem()
    {
        return view('ungvien/vieclamdaxem');
    }
    function thongtin()
    {
        return view('ungvien/capnhatthongtin');
    }
    function doimatkhau()
    {
        return view('ungvien/doimatkhau');
    }
}
