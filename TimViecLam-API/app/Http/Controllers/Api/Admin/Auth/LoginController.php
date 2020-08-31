<?php

namespace App\Http\Controllers\Api\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTFactory;
use JWTAuthException;
use App\Models\Admin;

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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

		$credentials = $request->only('email', 'password');
		$token = null;
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Sai thông tin đăng nhập',
                ], 401);
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

    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate($request->token);
            return response()->json([
                'status' => true,
                'message' => 'Đăng xuất Admin thành công!'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }
}