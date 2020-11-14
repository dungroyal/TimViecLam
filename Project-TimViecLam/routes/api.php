<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route đăng nhập
// Route::post('admin/login', 'Api\Admin\Auth\LoginController@login');
// Route::post('ung-vien/login', 'Api\UngVien\Auth\LoginController@login');
// Route::post('nha-tuyen-dung/login', 'Api\NhaTuyenDung\Auth\LoginController@login');

// Route đăng kí
// Route::post('admin/register', 'Api\Admin\Auth\RegisterController@register');
// Route::post('ung-vien/register', 'Api\UngVien\Auth\RegisterController@register');
// Route::post('nha-tuyen-dung/register', 'Api\NhaTuyenDung\Auth\RegisterController@register');


// Admin
// Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admin', 'jwt.auth']], function () {
//     Route::get('/me', function () {
//         return response()->json([
//             'guard' => 'Admin',
//             'me' => Auth::user(),
//         ]);
//     });

//     Route::post('logout', 'Api\Admin\Auth\LoginController@logout');
// });

// Route dành cho ứng viên
// Route::group(['prefix' => 'ung-vien', 'middleware' => ['assign.guard:job_seeker', 'jwt.auth']], function () {
//     Route::get('/me', function () {
//         return response()->json([
//             'guard' => 'Ứng viên',
//             'me' => Auth::user(),
//         ]);
//     });

//     Route::post('logout', 'Api\JobSeeker\Auth\LoginController@logout');
//     Route::get('job', 'Api\JobSeeker\JobController@index');
// });

// Route dành Nhà tuyển dụng
// Route::group(['prefix' => 'nha-tuyen-dung', 'middleware' => ['assign.guard:employer', 'jwt.auth']], function () {
//     Route::get('/me', function () {
//         return response()->json([
//             'guard' => 'Nhà tuyển dụng',
//             'me' => Auth::user(),
//         ]);
//     });

//     Route::post('logout', 'Api\NhaTuyenDung\Auth\LoginController@logout');
// });



// Test
    // Route::get('job', 'Api\JobSeeker\JobController@index');


