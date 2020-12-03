<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\Employer;
use App\JobSeeker;
use App\Models\Company;
use App\Models\Job;
use App\Models\Career;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        // $data=(Analytics::fetchMostVisitedPages(Period::days(7)));
        // dd($data);
        return view('admin.dashboard');
    }

    public function allCompany()
    {
        return view('admin.page.allCompany');
    }

    public function AllCompanyData(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('count_post', function($row){
                    return Job::where('company_id', $row->id)->count();
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
                ->rawColumns(['count_post','action','status'])
                ->make(true);
        }
    }

    public function newCompany()
    {
        return view('admin.page.newCompany');
    }

    public function newCompanyData(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::where('status', 1)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('count_post', function($row){
                    return Job::where('company_id', $row->id)->count();
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
                ->rawColumns(['count_post','action','status'])
                ->make(true);
        }
    }

    public function allJobSeeker()
    {
        return view('admin.page.allJobSeeker');
    }

    public function AllJobSeekerData(Request $request)
    {
        if ($request->ajax()) {
            $data = JobSeeker::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
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
                ->rawColumns(['action','status'])
                ->make(true);
        }
    }

    public function newJobSeeker()
    {
        return view('admin.page.newJobSeeker');
    }

    public function newJobSeekerData(Request $request)
    {
        if ($request->ajax()) {
            $data = JobSeeker::where('status', 1)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('count_post', function($row){
                    return Job::where('company_id', $row->id)->count();
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
                ->rawColumns(['count_post','action','status'])
                ->make(true);
        }
    }
}
