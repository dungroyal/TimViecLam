<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nghanhnghe;

class nganhngheController extends Controller
{
    function index()
    {
        $catalogs=Nghanhnghe::all();
    }
}
