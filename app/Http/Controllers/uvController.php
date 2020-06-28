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
            return view('ungvien.index');
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
        DB::insert('insert into ungtuyen (idCongviec, idUngvien, idNhaTuyenDung) values ('.$idUngvien.', '.$idJob.', '.$jobById->idNhaTuyenDung.')');
        return redirect()->back();
    }

    function ho_so_ung_vien()
    {
        return view('ungvien.page.hoSoUngVien');
    }
}
