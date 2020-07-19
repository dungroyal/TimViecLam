<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Nghanhnghe;

class homeController extends Controller
{
    function __construct()
    {
        $this->tinh=DB::table('tvl_tinhthanhpho')->get();
        $this->nganhnghe=DB::table('nganhnghe')->get();
    }

    function index()
    {
        $loaiCongViec=DB::table('loaicongviec')->get();
        
        $job=DB::table('congviec')
        ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
        ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
        ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
        ->get();
        return view('home.index',['list_job'=>$job,'Nghanhnghe'=>$this->nganhnghe,'tinhThanhPho'=>$this->tinh,'loaiCongViec'=>$loaiCongViec]);
    }

    function api()
    {
        return view('index');
    }

    function contact()
    {
        return view('home.contact');
    }
    
    function about()
    {
        return view('home.about');
    }

    function dang_nhap()
    {
        return view('home.dang_nhap');
    }


    function dang_nhap_ntd()
    {
        return view('home.auth.dang_nhap_ntd');
    }


    function dang_nhap_uv()
    {
        return view('home.auth.dang_nhap_uv');
    }

    function dang_ky()
    {
        return view('home.dang_ky');
    }
    function dang_ky_ntd()
    {
        return view('home.auth.dang_ky_ntd');
    }
    function dang_ky_uv()
    {
        return view('home.auth.dang_ky_uv');
    }

    function cong_ty($id)
    {
        $info_cty=DB::table('nhatuyendung')
        ->where('nhatuyendung.id','=',$id)
        ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
        ->select('nhatuyendung.*', 'hosocongty.*')
        ->get();

        $job=DB::table('congviec')
        ->Where('congviec.idNhaTuyenDung', '=', $id)
        ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
        ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
        ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
        ->get(); 

        
        return view('home.congty',['info_cty'=>$info_cty,'list_job'=>$job]);
    }

}
