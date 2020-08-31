<?php

namespace App\Http\Controllers\Api\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
use JWTAuthException;
use App\Models\Admin;
use App\Models\Data;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function __construct()
    {
        Auth::shouldUse('admin');
        $this->admin = new Admin;
    }
    
    public function login(Request $request)
    {
		$credentials = $request->only('email', 'password');
		$token = null;
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Sai thông tin đăng nhập'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Không thể tạo mã'], 500);
        }
        
        return response()->json([
		    'response' => 'success',
		    'result' => [
                'msg'=>"Đăng nhập thành công",
                'permission'=>"Admin",
                'status' => true,
                'token' => $token,
                'info' => Auth::user(),
            ],
		]);
    }

}