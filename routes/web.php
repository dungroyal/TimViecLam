<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@index');
Route::get('/product', 'productController@index');
Route::get('/product/{id}', 'productController@detail');
Route::get('/category/{id}', 'productController@product_by_id');
Route::post('/login', 'homeController@login');
Route::post('/search', 'productController@search');



// $prefix='product';
// Route::group(['prefix' => $prefix], function () use($prefix) {
//     $controller = $prefix.'Controller@';
//     Route::get('/',$controller.'index');
//     Route::get('/product/a',$controller.'detail');

    
//     Route::get('/'.$prefix.'/edit/{id}',$controller.'form')->where('id','[0-9]+');
//     Route::get('/'.$prefix.'/delete/{id}',$controller.'delete')->where('id','[0-9]+');
// });