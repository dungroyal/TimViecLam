<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;
use App\passengers;

class flights extends Controller
{
    function index()
    {
        $listFlight=Flight::all();
        return view('flight',['flight'=>$listFlight]);
    }

    function passengers($id)
    {
        $listFlight=Flight::all();
        $listPassengers=Passengers::where('flight_id',$id)->get();
        $infoF=Flight::where('id',$id)->get();
        return view('flight',['flight'=>$listFlight,'passengers'=>$listPassengers,'infoF'=>$infoF[0]]);
    }
}
