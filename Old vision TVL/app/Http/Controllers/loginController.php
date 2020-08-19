<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    function checklogin_uv(Request $request)
    {
        $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        if (Auth::guard('ungvien')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            if (Auth::guard('ungvien')->check()) {
                session(['ungvien'=>Auth::guard('ungvien')->user()]);
                return redirect('/ung-vien');
            }
        } else {
            return redirect('/dang-nhap/uv')->with('error-login-admin', 'Sai tên đăng nhập hoặc mật khẩu.');
        }
    }

    function checklogin_ntd(Request $request)
    {
        $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);

        if (Auth::guard('nhatuyendung')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            if (Auth::guard('nhatuyendung')->check()) {
                session(['nhatuyendung'=>Auth::guard('nhatuyendung')->user()]);
                return redirect('/nha-tuyen-dung');
            }
        } else {
            return redirect('/dang-nhap/ntd')->with('error-login-admin', 'Sai tên đăng nhập hoặc mật khẩu.');
        }
    }

    function checklogin_admin(Request $request)
    {
        $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            if (Auth::guard('admin')->check()) {
                session(['admin'=>Auth::guard('admin')->user()]);
                return redirect('/admin');
            }
        } else {
            return redirect('/admin/login')->with('error-login-admin', 'Sai tên đăng nhập hoặc mật khẩu.');
        }
    }

    function logout_uv()
    {
        session()->forget('ungvien');
        return redirect('/');
    }

    function logout_ntd()
    {
        session()->forget('nhatuyendung');
        return redirect('/');
    }

    function logout_admin()
    {
        session()->forget('admin');
        return redirect('/');
    }
}
