<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ntdController extends Controller
{
   
    
    function index()
    {
        if (session('nhatuyendung')) {
            $info_cty=DB::table('hosocongty')
            ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->get();

            $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();
            return view('nhatuyendung.index', ['ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty]);
        }else{
            return redirect('/dang-nhap/ntd');
        }
        
    }

    function hs_cong_viec(){
        $idNhaTuyenDung=Auth::guard('nhatuyendung')->user()->id;
        $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();
        $info_cty=DB::table('hosocongty')
        ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
        ->get();

        $congviec=DB::table('congviec')
            ->Where('idNhaTuyenDung', '=', $idNhaTuyenDung)
            ->join('tvl_tinhthanhpho', 'tvl_tinhthanhpho.matp', '=', 'congviec.diaDiem')
            ->get();
        return view('nhatuyendung.page.hoSoCongViec', ['listCongViec'=>$congviec,'ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty ]);
    }

    function hs_ung_tuyen($id){
        $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();

        $info_cty=DB::table('hosocongty')
            ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->get();

        $listUngTuyen=DB::table('ungtuyen')
            ->where('ungtuyen.idCongviec', '=',$id)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->join('hosoungvien', 'ungtuyen.idUngvien', '=', 'hosoungvien.idUngVien')
            ->select('ungtuyen.*', 'ungvien.*', 'hosoungvien.*')
            ->get();

        $congviec=DB::table('congviec')
            ->Where('id', '=', $id)
            ->join('tvl_tinhthanhpho', 'tvl_tinhthanhpho.matp', '=', 'congviec.diaDiem')
            ->first();

        return view('nhatuyendung.page.hoSoUngTuyen', ['listUngTuyen'=>$listUngTuyen,'congviec'=>$congviec,'ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty  ]);
    }

    function ung_vien($id){
        $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();

        $info_cty=DB::table('hosocongty')
            ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->get();

        $ungVien=DB::table('ungvien')
            ->where('ungvien.id', '=',$id)
            ->join('hosoungvien', 'ungvien.id', '=', 'hosoungvien.idUngVien')
            ->select('ungvien.*', 'hosoungvien.*')
            ->first();
        return view('nhatuyendung.page.cvUngVien', ['UngVien'=>$ungVien,'ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty ]);
    }



    function tin_tuyen_dung(){
        $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();

        $info_cty=DB::table('hosocongty')
            ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->get();

        $job=DB::table('congviec')
            ->where('congviec.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->join('nhatuyendung', 'congviec.idNhaTuyenDung', '=', 'nhatuyendung.id')
            ->join('hosocongty', 'nhatuyendung.id', '=', 'hosocongty.idNhaTuyenDung')
            ->select('congviec.*', 'nhatuyendung.tenCty', 'nhatuyendung.id AS idNTD', 'hosocongty.logoCty')
            ->get();

        return view('nhatuyendung.page.tinTuyenDung',['list_job'=>$job,'ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty]);
    }

    function add_tuyen_dung(){
        $this->ungtuyen=DB::table('ungtuyen')
            ->where('idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->where('status','=',0)
            ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
            ->select('ungtuyen.*', 'ungvien.*')
            ->get();
        $info_cty=DB::table('hosocongty')
            ->where('hosocongty.idNhaTuyenDung','=',Auth::guard('nhatuyendung')->user()->id)
            ->get();
        return view('nhatuyendung.page.addTuyenDung',['ungtuyen'=>$this->ungtuyen,'info_cty'=>$info_cty]);
    }
}
