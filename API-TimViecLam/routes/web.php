<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();
// Router Home Page -----------------------------------------------------------------
Route::get('/', 'home\HomeController@index');

// Router Single Page ---------------------------------------------------------------
Route::get('nha-tuyen-dung/{any?}', 'AppController@employer')->where('any', '.*');
Route::get('trang-ca-nhan/{any?}', 'AppController@job_seeker')->where('any', '.*');