<?php

namespace App\Http\Controllers\Api\Employer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Employer;

class RegisterController extends Controller
{
    public function register(Request $request) {
        //Kiểm tra tính hợp lệ
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:nha_tuyen_dung',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        //Tạo tài khoản
        $user = Employer::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
                
        return response()->json([
            'message' => 'Đăng kí nhà tuyển dụng thành công',
            'user' => $user,
        ], 201);
    }
}
