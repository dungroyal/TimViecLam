<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class homeController extends Controller
{
    function index()
    {
        // $products=product::all();
        // $products=product::paginate(4);
        // $catalogs=catalog::all();
        // return view('home.index',['list_products'=>$products,'list_catalog'=>$catalogs]);
        return view('home.index');
    }

    function contact()
    {
        return view('home.contact');
    }

    
    function about()
    {
        return view('home.about');
    }

      
    function login(Request $request)
    {
        $request->validate([
            'username'=>['required'],
            'password'=>['required']
         ]);
        return 'Đăng nhập thành công';
    }
}
