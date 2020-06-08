<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class productController extends Controller
{
    function index()
    {
        $products=product::paginate(4);
        $catalogs=catalog::all();
        return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs]);
    }

    function detail($id)
    {
        $catalogs=catalog::all();
        $products=product::where('idProduct',$id)->get();
        return view('home.productdetail',['product'=>$products[0],'list_catalog'=>$catalogs]);
    }

    function product_by_id($id)
    {
        $catalogs=catalog::all();
        $products=product::where('idCategory',$id)->paginate(4);
        $get_name_catalog=catalog::where('idCategory',$id)->get();
        return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs,'nameCategory'=>$get_name_catalog[0]]);
    }

    function search(Request $request)
    {
         $request->validate([
            'keyword'=>['required']
         ]);
         
        $catalogs=catalog::all();
        $keyword=$request->keyword;
        $products=product::where('nameProduct', 'LIKE', '%' . $keyword . '%')->paginate(4);

        return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs,'keyword'=>$keyword]);
        }
}
