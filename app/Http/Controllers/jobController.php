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
        ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
        ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
        ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
        ->get();
        
        $tinh=DB::table('tvl_tinhthanhpho')->get();
        $nganhnghe=DB::table('nganhnghe')->get();
        return view('home.job',['list_job'=>$job,'Nghanhnghe'=>$nganhnghe,'tinhThanhPho'=>$tinh]);
    }

    function job_detail($id)
    {
        $jobById=DB::table('congviec')
        ->Where('congviec.id', '=', $id)
        ->first();

        $ctyById=DB::table('nhatuyendung')
        ->Where('nhatuyendung.id', '=', $jobById->idNhaTuyenDung)
        ->first();

        $hoSoCty=DB::table('hosocongty')
        ->Where('hosocongty.idNhaTuyenDung', '=', $ctyById->id)
        ->first();

        return view('home.job_detail', ['jobById'=>$jobById ,'ctyById'=> $ctyById,'hoSoCty'=> $hoSoCty]);
    }
        
    function search_CongViec(Request $request)
    {
        $tinh=DB::table('tvl_tinhthanhpho')->get();
        $nganhnghe=DB::table('nganhnghe')->get();
        
        if ($request->keyword!=null && $request->nhanhNghe==null && $request->noiLamViec==null) {
            $job=DB::table('congviec')
            ->where('congviec.tenCongViec', 'like', '%'.$request->keyword.'%')
            ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
            ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
            ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
            ->get();
        }
        
        elseif ($request->noiLamViec==null) {
            $job=DB::table('congviec')
            ->where('congviec.tenCongViec', 'like', '%'.$request->keyword.'%')
            ->where('congviec.idNganhNghe', '=', ''.$request->nhanhNghe.'')
            ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
            ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
            ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
            ->get();
        }elseif ($request->nhanhNghe==null) {
            $job=DB::table('congviec')
            ->where('congviec.tenCongViec', 'like', '%'.$request->keyword.'%')
            ->where('congviec.diaDiem', '=', ''.$request->noiLamViec.'')
            ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
            ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
            ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
            ->get();
        }else {
            $job=DB::table('congviec')
            ->where('congviec.tenCongViec', 'like', '%'.$request->keyword.'%')
            ->where('congviec.idNganhNghe', '=', ''.$request->nhanhNghe.'')
            ->where('congviec.diaDiem', '=', ''.$request->noiLamViec.'')
            ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
            ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
            ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
            ->get();
        }

        if ($job->isEmpty()) {
            $message_empty_search="Không có kết quản phù hợp.";
            return view('home.job',['list_job'=>$job,'message_empty_search'=>$message_empty_search,'Nghanhnghe'=>$nganhnghe,'tinhThanhPho'=>$tinh]);
        }

        return view('home.job',['list_job'=>$job,'Nghanhnghe'=>$nganhnghe,'tinhThanhPho'=>$tinh]);
    }
}