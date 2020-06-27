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
            return view('nhatuyendung.index');
        }else{
            return redirect('/dang-nhap/ntd');
        }
        
    }

    function hs_cong_viec(){
        $idNhaTuyenDung=Auth::guard('nhatuyendung')->user()->id;
        $congviec=DB::table('congviec')
            ->Where('idNhaTuyenDung', '=', $idNhaTuyenDung)
            ->get();
        return view('nhatuyendung.page.hoSoCongViec', ['listCongViec'=>$congviec ]);
    }

    function hs_ung_tuyen($id){
        $listUngTuyen=DB::table('ungtuyen')
        ->where('ungtuyen.idNhaTuyenDung', '=',$id)
        ->join('ungvien', 'ungtuyen.idUngvien', '=', 'ungvien.id')
        ->join('hosoungvien', 'ungtuyen.idUngvien', '=', 'hosoungvien.idUngVien')
        ->select('ungtuyen.*', 'ungvien.*', 'hosoungvien.*')
        ->get();

        $congviec=DB::table('congviec')
            ->Where('id', '=', $id)
            ->first();

        return view('nhatuyendung.page.hoSoUngTuyen', ['listUngTuyen'=>$listUngTuyen,'congviec'=>$congviec]);
    }

    function ung_vien($id){
        $ungVien=DB::table('ungvien')
        ->where('ungvien.id', '=',$id)
        ->join('hosoungvien', 'ungvien.id', '=', 'hosoungvien.idUngVien')
        ->select('ungvien.*', 'hosoungvien.hoTen')
        ->first();

        // return $ungVien;

        return view('nhatuyendung.page.cvUngVien', ['listungVien'=>$ungVien]);

    }
}
