<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class listAPI extends Controller
{
    public function index()
    {
        return view('listAPI');
    }

}
