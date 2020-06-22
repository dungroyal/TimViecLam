<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Congviec;
use App\Nghanhnghe;

class jobController extends Controller
{
    function index()
        {
            $job=DB::table('congviec')
            ->join('nhatuyedung', 'congviec.idNhaTuyenDung', '=', 'nhatuyedung.id')
            ->join('hosocongty', 'nhatuyedung.id', '=', 'hosocongty.idNhaTuyeDung')
            ->select('congviec.*', 'nhatuyedung.tenCty', 'nhatuyedung.id AS idNTD', 'hosocongty.logoCty')
            ->get();
            return view('home.job',['list_job'=>$job]);
        }

    function job_detail($id)
        {
            $jobById=DB::table('congviec')
            ->Where('congviec.id', '=', $id)
            ->first();

            $ctyById=DB::table('nhatuyedung')
            ->Where('nhatuyedung.id', '=', $jobById->idNhaTuyenDung)
            ->first();

            $hoSoCty=DB::table('hosocongty')
            ->Where('hosocongty.idNhaTuyeDung', '=', $ctyById->id)
            ->first();

            return view('home.job_detail', ['jobById'=>$jobById ,'ctyById'=> $ctyById,'hoSoCty'=> $hoSoCty]);
        }

    
}
