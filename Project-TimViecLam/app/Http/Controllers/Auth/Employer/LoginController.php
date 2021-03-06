<?php

namespace App\Http\Controllers\Auth\Employer;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::EMPLOYER_HOME;

    public function __construct()
    {
        $this->middleware('guest:employer', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
        return view('auth.employer.login');
    }

    protected function guard()
    {
        return Auth::guard('employer');
    }
}
