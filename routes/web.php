<?php

use Illuminate\Support\Facades\Route;

// ====================== HOME ======================

Route::get('/', 'homeController@index');
Route::get('/blog', 'blogController@index');
Route::get('/job', 'jobController@index');
Route::get('/contact', 'homeController@contact');
Route::get('/about', 'homeController@about');
Route::get('/dang-nhap', 'homeController@dang_nhap');
Route::get('/dang-ky', 'homeController@dang_ky');


Route::get('/product/{id}', 'productController@detail');
Route::get('/category/{id}', 'productController@product_by_id');
Route::post('/login', 'homeController@login');
Route::post('/search', 'productController@search');

// ====================== ADMIN ======================

// $prefix='product';
// Route::group(['prefix' => $prefix], function () use($prefix) {
//     $controller = $prefix.'Controller@';
//     Route::get('/',$controller.'index');
//     Route::get('/product/a',$controller.'detail');

    
//     Route::get('/'.$prefix.'/edit/{id}',$controller.'form')->where('id','[0-9]+');
//     Route::get('/'.$prefix.'/delete/{id}',$controller.'delete')->where('id','[0-9]+');
// });