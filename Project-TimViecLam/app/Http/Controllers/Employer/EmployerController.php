<?php

namespace App\Http\Controllers\Employer;

use App\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use App\JobSeeker;
use Illuminate\Support\Facades\Response;
use App\Models\Company;
use Illuminate\Support\Str;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
        $this->middleware(function ($request, $next) {
            // Get all data of Employer and Company
            $this->idEmployer = Auth::guard('employer')->user()->id;
            $this->company = DB::table('companies')->where('employer_id', $this->idEmployer)->first();
            $this->employer = Auth::guard('employer')->user();
            return $next($request);
        });
    }

    public function index()
    {
        $info_company = $this->company;
        $info_employer = $this->employer;
        return view('employer.dashboard',compact('info_company','info_employer'));
    }

    public function company(Request $request)
    {
        $method = $request->method();
        $info_company = $this->company;
        $info_employer = $this->employer;

        if ($request->isMethod('post')){
            $employer  = Employer::findOrFail($info_employer->id);
            $company  = Company::findOrFail($info_company->id);
            $company->address = $request->address;
            $company->city = $request->city;
            $company->description = $request->description;
            $company->website = $request->website;
            $company->phone = $request->phone;
            $company->fax = $request->fax;
            $company->name_contact = $request->name_contact;
            $company->phone_contact = $request->phone_contact;
            $company->address_contact = $request->address_contact;
            $company->email_contact = $request->email_contact;
            $company->status = 0;
            $company->save();
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
        return view('employer.page.company',compact('info_company','info_employer'));
    }

    public function uploadLogo(Request $request){
        $this->validate($request,[
            'logo'=>'required|mimes:png,jpeg,jpg|max:20000'
        ]);
        $info_company = $this->company;
        $company  = Company::findOrFail($info_company->id);
        if($request->hasFile('logo')){    
            $file = $request->file('logo');
            $path = $file->store('uploads/images','public');
            $company->logo = $path;
            $company->save();
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
        return redirect()->back()->with('error','Cập nhật không thành công!');
    }

    public function uploadBusinessLicense(Request $request){
        $this->validate($request,[
            'business_license'=>'required|mimes:pdf|max:30000'
        ]);
        $info_company = $this->company;
        $company  = Company::findOrFail($info_company->id);
        if($request->hasFile('business_license')){    
            $file = $request->file('business_license');
            $path = $file->store('uploads/files','public');
            $company->business_license = $path;
            $company->save();
            return redirect()->back()->with('success','Tải lên giấy phép kinh doanh thành công!');
        }
        return redirect()->back()->with('error','Tải lên giấy phép kinh doanh không thành công!');
    }

    public function downloadBusinessLicense()
    {
        $info_company = $this->company;
        $company  = Company::findOrFail($info_company->id);
        $type = Str::afterLast($company->business_license, '.');
        $file = public_path().'/'.$company->business_license;
        $name = 'GPKD-'.$company->name_company.' - Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz.'.$type;
        $headers = array('Content-Type: application/'.$type,);
        return Response::download($file, $name, $headers);
    }

    public function deleteBusinessLicense()
    {
        $info_company = $this->company;
        $company  = Company::findOrFail($info_company->id);
        $company->business_license = "";
        $company->save();
        return redirect()->back()->with('success','Xóa giấy phép kinh doanh không thành công!');
    }

    public function listProfileApply()
    {
        $info_company = $this->company;
        $info_employer = $this->employer;
        return view('employer.page.listProfileApply',compact('info_company','info_employer'));
    }

    public function jobSeekerById($id)
    {
        $jobSeekerById = JobSeeker::findOrFail($id);
        $profile = DB::table('profiles')->where('job_seeker_id', $id)->first();
        return view('employer.element.profileJobSeeker',compact('jobSeekerById','profile'));
    }
    
    public function listProfileApplyData(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('apply')->where('employer_id',Auth::guard('employer')->user()->id)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name_jsk', function($row){
                    return \App\JobSeeker::find($row->job_seeker_id)->name;
                })
                ->addColumn('name_job', function($row){
                    return \App\Models\Job::find($row->job_id)->name_job;
                })
                ->addColumn('status', function($row){
                    if ($row->status == 1) {
                        $status = '<span class="badge badge-pill badge-danger">Mới</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đã xác minh</span>';
                    }
                    return $status;
                })
                ->addColumn('date', function($row){
                    $now = Carbon::now('Asia/Ho_Chi_Minh');
                    $updated_at =  Carbon::parse($row->updated_at);
                    return $updated_at->diffForHumans($now);
                })
                ->addColumn('action', function($row){
                    $id_jsk=\App\JobSeeker::find($row->job_seeker_id)->id;
                    $actionBtn = '<button onclick="showModal('.$id_jsk.')" type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-xl"><i class="far fa-eye"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['name_jsk','name_job','status','date','action'])
                ->make(true);
        }
    }
    
}
