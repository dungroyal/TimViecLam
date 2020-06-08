<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;

class flightController extends Controller
{
    function index()
    {
        $flights=flight::all();//tra ve tat ca tuyen bay
        return view('flight',['flights'=>$flights]);
    }
    function create()
    {
        return view('create');
    }

    
    function edit($id)
    {
        $flight=flight::where('id',$id)->get();
        return view('edit',['flight'=>$flight[0]]);
    }

    function store(Request $request)
    {
        //Validation
        $request->validate([
           'origin'=>['required'],
           'destination'=>['required'],
           'duration'=>['required']
        ]);

        //get data form
        $data=array(
            'origin'=>$request->origin,
            'destination'=>$request->destination,
            'duration'=>$request->duration
        );
        //them vao database
        flight::create($data);
        return redirect('/flight');
    }

    
    // function login(Request $request)
    // {
    //     // //Validation
    //     // $request->validate([
    //     //    'origin'=>['required'],
    //     //    'destination'=>['required'],
    //     //    'duration'=>['required']
    //     // ]);

    //     // //get data form
    //     // $data=array(
    //     //     'origin'=>$request->origin,
    //     //     'destination'=>$request->destination,
    //     //     'duration'=>$request->duration
    //     // );
    //     // //them vao database
    //     // flight::create($data);
    //     return view('login');
    // }

    function update(Request $request,$id)
    {
        //get data form
        $data=array(
            'origin'=>$request->origin,
            'destination'=>$request->destination,
            'duration'=>$request->duration
        );
        //them vao database
        $flight=flight::whereId($id)->update($data);
        return redirect('/flight');
    }

    function del($id)
    {
        $flight=flight::whereId($id)->delete($id);
        return redirect('/flight');
    }
}
