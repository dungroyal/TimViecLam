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
use App\Models\Profiles;
use Analytics;
use App\Models\Career;
use App\Models\City;
use App\Models\TypeJob;
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

    public function system(Request $request)
    {
        return view('admin.system');
    }

    public function categoryTypeJob(Request $request)
    {
        if ($request->ajax()) {
            $data = TypeJob::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href=" '. Route("admin.check.job_seeker",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.page.category.typeJob');
    }

    public function categoryCareer(Request $request)
    {
        if ($request->ajax()) {
            $data = Career::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href=" '. Route("admin.check.job_seeker",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.page.category.career');
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
                        $status = '<span class="badge badge-pill badge-success">Đã duyệt</span>';
                    }else if($row->status == 2){
                        $status = '<span class="badge badge-pill badge-danger">Không được duyệt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-danger">Chờ duyệt</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="'. Route("admin.check.company", ['id' => $row->id]).'"  class="btn btn-success waves-effect waves-light btn-sm"><i class="fas fa-tasks"></i></a>';                    return $actionBtn;
                })
                ->rawColumns(['count_post','action','status'])
                ->make(true);
        }
    }

    public function newCompany()
    {
        return view('admin.page.newCompany');
    }

    public function checkCompany($id)
    {
        $Company = Company::findOrFail($id);
        $Employer = Employer::findOrFail($Company->employer_id);
        $listJobByCompany = Job::where('company_id',$Company->id)->orderByDesc('created_at')->get();
        return view('admin.page.checkCompany',compact('Company','Employer','listJobByCompany'));
    }

    public function acceptCompany($id)
    {
        $Company = Company::findOrFail($id);
        $Company->status = 1;
        $Company->note = "Chúc mừng công ty ".$Company->name_company." đã được duyệt";
        $Company->save();
        Job::where('company_id', $id)->where('status', 3)->update(['status' => 1]);
        return redirect()->back()->with('message','Đã duyệt công ty '.$Company->name_company);
    }

    public function notAcceptCompany(Request $request)
    {
        $Company = Company::findOrFail($request->idCom);
        $Company->note = $request->note;
        $Company->status = 2;
        $Company->save();
        Job::where('company_id', $request->idCom)->where('status',1)->update(['status' => 3]);
        return redirect()->back()->with('message','Đã từ chối công ty '.$Company->name_company);
    }

    public function newCompanyData(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::where('status', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){    
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('count_post', function($row){
                    return Job::where('company_id', $row->id)->count();
                })
                ->addColumn('city', function($row){
                    return \App\Models\City::findOrFail($row->city)->name;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="'. Route("admin.check.company", ['id' => $row->id]).'"  class="btn btn-success waves-effect waves-light btn-sm"><i class="fas fa-tasks"></i></a>';
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

    public function acceptProfile($id)
    {
        $Profile = Profiles::findOrFail($id);
        $Profile->status = 1;
        $Profile->note = "Chúc mừng hồ sơ của bạn đã được duyệt";
        $Profile->save();
        return redirect()->back()->with('message','Chúc mừng hồ sơ của bạn đã được duyệt');
    }

    public function notAcceptProfile(Request $request)
    {
        $Profile = Profiles::findOrFail($request->idProfile);
        $Profile->status = 2;
        $Profile->note = $request->note;
        $Profile->save();
        return redirect()->back()->with('message','Hồ sơ đã bị từ chối');
    }

    
    public function checkJobSeeker($id)
    {
        $Profile = Profiles::findOrFail($id);
        $JobSeeker = JobSeeker::findOrFail($Profile->job_seeker_id);
        return view('admin.page.checkJobSeeker',compact('Profile','JobSeeker'));
    }

    public function AllJobSeekerData(Request $request)
    {
        if ($request->ajax()) {
            $data = Profiles::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->name;
                })
                
                ->addColumn('email', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->email;
                })
                
                ->addColumn('phone', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->phone;
                })
                ->addColumn('city', function($row){
                    return City::findOrFail($row->work_location)->name;
                })
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('status', function($row){
                    if ($row->status == 0) {
                        $status = '<span class="badge badge-pill badge-warning">Chờ duyệt</span>';
                    }else if($row->status == 1){
                        $status = '<span class="badge badge-pill badge-success">Đã duyệt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-danger">Không được duyệt</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href=" '. Route("admin.check.job_seeker",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['name','phone','email','city','action','status'])
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
            $data = Profiles::where('status',0)->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->name;
                })
                
                ->addColumn('email', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->email;
                })
                
                ->addColumn('phone', function($row){
                    return JobSeeker::findOrFail($row->job_seeker_id)->phone;
                })
                ->addColumn('city', function($row){
                    return City::findOrFail($row->work_location)->name;
                })
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('status', function($row){
                    if ($row->status == 0) {
                        $status = '<span class="badge badge-pill badge-warning">Chờ duyệt</span>';
                    }else if($row->status == 1){
                        $status = '<span class="badge badge-pill badge-success">Đã duyệt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-danger">Không được duyệt</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href=" '. Route("admin.check.job_seeker",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['name','phone','email','city','action','status'])
                ->make(true);
        }
    }

    
    public function allJobPost(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('company', function($row){
                    $info_company =  Company::findOrFail($row->company_id);
                    if($info_company->status == 1){
                        $company = $info_company->name_company.' <i class="fas fa-check-circle text-success fa-sm"></i>';
                    }elseif($info_company->status == 0){
                        $company = $info_company->name_company.' <i class="fas fa-info-circle text-warning fa-sm"></i>';
                    }else{
                        $company = $info_company->name_company.' <i class="fas fa-times-circle text-danger fa-sm"></i>';
                    }
                    return $company;
                })
                
                ->addColumn('career', function($row){
                    return Career::findOrFail($row->career_id)->name;
                })
                ->addColumn('city', function($row){
                    return City::findOrFail($row->city)->name;
                })
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('status', function($row){
                    if ($row->status == 0) {
                        $status = '<span class="badge badge-pill badge-warning">Chờ duyệt</span>';
                    }elseif($row->status == 1){
                        $status = '<span class="badge badge-pill badge-success">Đã duyệt</span>';
                    }elseif($row->status == 2){
                        $status = '<span class="badge badge-pill badge-danger">Không được duyệt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-danger">Công ty không được duyệt</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    if($row->status != 3){
                        $actionBtn = '<a href=" '. Route("admin.check.job_post",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    }else{
                        $actionBtn = "";
                    }
                    return $actionBtn;
                })
                ->rawColumns(['company','career','city','action','status'])
                ->make(true);
        }
        return view('admin.page.allJobPost');
    }

    public function checkJobPost($id)
    {
        $JobDetail = Job::findOrFail($id);
        $Employer = Employer::findOrFail($JobDetail->employer_id);
        $Company = Company::findOrFail($JobDetail->company_id);
        return view('admin.page.checkJobPost',compact('JobDetail','Employer','Company'));
    }

    public function acceptJobPost($id)
    {
        $JobDetail = Job::findOrFail($id);
        $JobDetail->status = 1;
        $JobDetail->note = "Chúc mừng tin ".$JobDetail->name_job." đã được duyệt";
        $JobDetail->save();
        return redirect()->back()->with('message','Đã duyệt tin tuyển dụng');
    }

    public function notAcceptJobPost(Request $request)
    {
        $JobDetail = Job::findOrFail($request->idJobPost);
        $JobDetail->status = 2;
        $JobDetail->note = $request->note;
        $JobDetail->save();
        return redirect()->back()->with('message','Tin tuyển dụng đã bị từ chối');
    }

    public function newJobPost(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::where('status',0)->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('company', function($row){
                    $info_company =  Company::findOrFail($row->company_id);
                    if($info_company->status == 1){
                        $company = $info_company->name_company.' <i class="fas fa-check-circle text-success fa-sm"></i>';
                    }elseif($info_company->status == 0){
                        $company = $info_company->name_company.' <i class="fas fa-info-circle text-warning fa-sm"></i>';
                    }else{
                        $company = $info_company->name_company.' <i class="fas fa-times-circle text-danger fa-sm"></i>';
                    }
                    return $company;
                })
                
                ->addColumn('career', function($row){
                    return Career::findOrFail($row->career_id)->name;
                })
                ->addColumn('city', function($row){
                    return City::findOrFail($row->city)->name;
                })
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('status', function($row){
                    if ($row->status == 0) {
                        $status = '<span class="badge badge-pill badge-warning">Chờ duyệt</span>';
                    }else if($row->status == 1){
                        $status = '<span class="badge badge-pill badge-success">Đã duyệt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-danger">Không được duyệt</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href=" '. Route("admin.check.job_post",["id" =>$row->id]).' " class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['company','career','city','action','status'])
                ->make(true);
        }
        return view('admin.page.newJobPost');
    }
}
