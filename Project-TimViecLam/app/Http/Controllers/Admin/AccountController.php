<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\Employer;
use App\JobSeeker;
use App\Admin;
use App\Models\Company;
use App\Models\Job;
use App\Models\Career;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function AccountEmployer()
    {
        return view('admin.page.account.accountEmployer');
    }

    public function AccountEmployerData(Request $request)
    {
        if ($request->ajax()) {
            $data = Employer::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('name_company', function($row){
                    return Company::where('employer_id', $row->id)->first()->name_company;
                })
                ->addColumn('phone', function($row){
                    return Company::where('employer_id', $row->id)->first()->phone;
                })
                ->addColumn('status', function($row){
                    if ($row->status == 1) {
                        $status = 'Đang hoạt động';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đã xác minh</span>';
                    }
                    return $status;
                })
                ->addColumn('checkEmail', function($row){
                    if($row->email_verified_at){
                        $checkEmail = $row->email.' <i class="fas fa-check-circle text-success" title="Đã xác thực"></i>';
                    }else{
                        $checkEmail = $row->email.' <i class="fas fa-times-circle text-danger" title="Chưa xác thực"></i>';
                    }
                    return $checkEmail;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <button onclick="showModal('.$row->id.')" type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-xl"><i class="far fa-eye"></i></button>
                        <a href=" '. Route("employer.editJobPost",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['checkEmail','phone','name_company','action','status'])
                ->make(true);
        }
    }

    public function AccountJobSeeker()
    {
        return view('admin.page.account.accountJobSeeker');
    }

    public function AccountJobSeekerData(Request $request)
    {
        if ($request->ajax()) {
            $data = JobSeeker::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('status', function($row){
                    if ($row->status == 1) {
                        $status = 'Đang hoạt động';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đã xác minh</span>';
                    }
                    return $status;
                })
                ->addColumn('checkEmail', function($row){
                    if($row->email_verified_at){
                        $checkEmail = $row->email.' <i class="fas fa-check-circle text-success" title="Đã xác thực"></i>';
                    }else{
                        $checkEmail = $row->email.' <i class="fas fa-times-circle text-danger" title="Chưa xác thực"></i>';
                    }
                    return $checkEmail;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <button onclick="showModal('.$row->id.')" type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-xl"><i class="far fa-eye"></i></button>
                        <a href=" '. Route("employer.editJobPost",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['checkEmail','action','status'])
                ->make(true);
        }
    }

    public function AccountAdmin()
    {
        return view('admin.page.account.accountAdmin');
    }

    public function AccountAdminData(Request $request)
    {
        if ($request->ajax()) {
            $data = Admin::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('checkEmail', function($row){
                    if($row->email_verified_at){
                        $checkEmail = $row->email.' <i class="fas fa-check-circle text-success" title="Đã xác thực"></i>';
                    }else{
                        $checkEmail = $row->email.' <i class="fas fa-times-circle text-danger" title="Chưa xác thực"></i>';
                    }
                    return $checkEmail;
                })
                ->addColumn('status', function($row){
                    if ($row->status == 1) {
                        $status = '<span class="badge badge-pill badge-danger">Mới</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đã xác minh</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <button onclick="showModal('.$row->id.')" type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-xl"><i class="far fa-eye"></i></button>
                        <a href=" '. Route("employer.editJobPost",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                        <a onclick="deleteConfirmation('.$row->id.')" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['checkEmail','update_at','action','status'])
                ->make(true);
        }
    }
}
