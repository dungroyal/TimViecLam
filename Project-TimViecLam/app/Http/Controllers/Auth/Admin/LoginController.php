<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
        return view('auth.admin.login');
    }
    
    public function showResetForm()
    {
        return view('auth.admin.passwords.reset');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
