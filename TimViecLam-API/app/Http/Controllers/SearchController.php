<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword= $request->get('keyword');
        $data=Admin::query()
        ->where('name', 'LIKE', "%{$keyword}%") 
        // ->orWhere('email', 'LIKE', "%{$searchTerm}%") 
        // ->limit(5)
        ->get();
        return response()->json($data);
    }
}
