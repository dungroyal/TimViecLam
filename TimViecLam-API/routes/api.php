<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('admin/login', 'Api\Admin\Auth\LoginController@login');
Route::post('ung-vien/login', 'Api\UngVien\Auth\LoginController@login');
Route::post('nha-tuyen-dung/login', 'Api\NhaTuyenDung\Auth\LoginController@login');

Route::get('/demo', function () {
    return 'DEMO';
});



// Route::group(['prefix' => 'admin','middleware' => ['assign.guard:admin','jwt.auth']],function ()
// {
// 	Route::get('/demo',function () {
//             return "Tôi là Admin nè";
//         });	
// });


// Route::group(['middleware' => ['jwt.verify'], 'prefix' => 'admin'], function()
// {
//     Route::get('/demo',function () {
//     return "Tôi là Admin nè";
//         });	
// });





// Route::group(['prefix' => 'subadmin','middleware' => ['assign.guard:subadmins','jwt.auth']],function ()
// {
// 	Route::get('/demo','SubadminController@demo');	
// });

// Route::group(['prefix' => 'user','middleware' => ['assign.guard:admins','jwt.auth']],function ()
// {
// 	Route::get('/demo','UserController@demo');	
// });