<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Ungtuyen;

class uvController extends Controller
{
    function index()
    {
        if (session('ungvien')) {
            $info_uv=DB::table('hosoungvien')
            ->where('hosoungvien.idUngVien','=',Auth::guard('ungvien')->user()->id)
            ->get();
            return view('ungvien.index',['info_uv'=>$info_uv ]);
        }else{
            return redirect('/dang-nhap/uv');
        }
    }

    function ung_tuyen($id)
    {
        $idUngvien=Auth::guard('ungvien')->user()->id;
        $idJob=$id;
        $jobById=DB::table('congviec')
            ->Where('congviec.id', '=', $id)
            ->first();
        DB::insert('insert into ungtuyen (idCongviec, idUngvien, idNhaTuyenDung) values ('.$idJob.', '.$idUngvien.', '.$jobById->idNhaTuyenDung.')');
        return redirect()->back();
    }

    function ho_so_ung_vien()
    {
        $info_uv=DB::table('hosoungvien')
            ->where('hosoungvien.idUngVien','=',Auth::guard('ungvien')->user()->id)
            ->get();
        return view('ungvien.page.hoSoUngVien',['info_uv'=>$info_uv ]);
    }
}
