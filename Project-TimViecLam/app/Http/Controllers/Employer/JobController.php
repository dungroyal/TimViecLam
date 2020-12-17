<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JobPostRequest;
use App\Models\Job;
use App\Models\Career;
use App\Models\City;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
        $this->middleware(function ($request, $next) { 
            // Get all data of Employer and Company
            $this->idEmployer = Auth::guard('employer')->user()->id;
            $company = DB::table('companies')->where('employer_id', $this->idEmployer)->first();
            $employer = Auth::guard('employer')->user();
            $collection = collect($company);
            $data = $collection->merge($employer);
            $this->data_company =  $data->all();
            return $next($request);
        });
        }
        
    
    public function showCreateJobPostForm()
    {
        $info_company = $this->data_company;
        return view('employer.page.createJob',compact('info_company'));
    }
    
    public function store(Request $request)
    {
        if($request->idJob == null){
            $this->validate($request,[
                'job_code'=>['required', 'unique:App\Models\Job,job_code', 'max:10'],
                'name_job'=>['required', 'string', 'max:255'],
                'type_job_id'=> ['required'],
                'amount'=> ['required'],
                'career_id' => ['required'],
                'grade_id' => ['required'],
                'salary_id' => ['required'],
                'degree_id' => ['required'],
                'experience_id' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'description'=>['required'],
                'job_requirements' => ['required'],
                'sex_requirements' => ['required'],
                'profile_request' => ['required'],
                'benefits' => ['required'],
                'name_contact' => ['required'],
                'phone_contact' => ['required'],
                'address_contact' => ['required'],
                'email_contact' => ['required'],
                'deadline' => ['required'],
            ]);
    
            Job::create([
                'job_code'=>request('job_code'), request('job_code'),
                'company_id'=>$this->data_company['employer_id'],
                'employer_id'=>$this->data_company['id'],
                'name_job'=>$name_job = request('name_job'),
                'type_job_id'=>request('type_job_id'),
                'amount'=>request('amount'),
                'career_id' =>request('career_id'),
                'grade_id' =>request('grade_id'),
                'salary_id' =>request('salary_id'),
                'degree_id' =>request('degree_id'),
                'experience_id' =>request('experience_id'),
                'address' =>request('address'),
                'city' =>request('city'),
                'description'=>request('description'),
                'job_requirements' =>request('job_requirements'),
                'sex_requirements' =>request('sex_requirements'),
                'profile_request' =>request('profile_request'),
                'benefits' =>request('benefits'),
                'name_contact' =>request('name_contact'),
                'phone_contact' =>request('phone_contact'),
                'address_contact' =>request('address_contact'),
                'email_contact' =>request('email_contact'),
                'deadline' =>format_date(request('deadline')),
                'slug'=> str_slug ($name_job),
                'status' =>"1",
            ]);
            return redirect('/employer')->with('message','Thêm tin tuyển dụng thành công');
        }else{
            $this->validate($request,[
                'name_job'=>['required', 'string', 'max:255'],
                'type_job_id'=> ['required'],
                'amount'=> ['required'],
                'career_id' => ['required'],
                'grade_id' => ['required'],
                'salary_id' => ['required'],
                'degree_id' => ['required'],
                'experience_id' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'description'=>['required'],
                'job_requirements' => ['required'],
                'sex_requirements' => ['required'],
                'profile_request' => ['required'],
                'benefits' => ['required'],
                'name_contact' => ['required'],
                'phone_contact' => ['required'],
                'address_contact' => ['required'],
                'email_contact' => ['required'],
                'deadline' => ['required'],
            ]);

            $Job = Job::find($request->idJob);

            $Job->name_job =$request->name_job;
            $Job->type_job_id =$request->type_job_id;
            $Job->amount =$request->amount;
            $Job->career_id =$request->career_id;
            $Job->grade_id =$request->grade_id;
            $Job->salary_id =$request->salary_id;
            $Job->degree_id =$request->degree_id;
            $Job->experience_id =$request->experience_id;
            $Job->address =$request->address;
            $Job->city =$request->city;
            $Job->description =$request->description;
            $Job->job_requirements =$request->job_requirements;
            $Job->sex_requirements =$request->sex_requirements;
            $Job->profile_request =$request->profile_request;
            $Job->benefits =$request->benefits;
            $Job->name_contact =$request->name_contact;
            $Job->phone_contact =$request->phone_contact;
            $Job->address_contact =$request->address_contact;
            $Job->email_contact =$request->email_contact;
            $Job->deadline =$request->deadline;

            $Job->save();
            return redirect()->back()->with('message','Cập nhật thành công');
        }
    }

    public function delJobPost(Request $request)
    {
        $delete = Job::where('id', $request->id)->delete();
        if ($delete == 1) {
            $success = true;
            $message = "Đã xóa thành công!";
        } else {
            $success = true;
            $message = "Không tìm thấy bài đăng!";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function editJobPostForm($id)
    {
        $info_company = $this->data_company;
        $infoJob = Job::findOrFail($id);
        return view('employer.page.editJobPost',compact('infoJob','info_company'));
    }

    public function listJobPost()
    {
        $info_company = $this->data_company;
        return view('employer.page.listJobPost',compact('info_company'));
    }

    public function anyData(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::latest()->where('employer_id',$this->data_company['id'])->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('update_at', function($row){
                    return date_format($row->updated_at,"d/m/Y");
                })
                ->addColumn('deadline', function($row){
                    $now = Carbon::now('Asia/Ho_Chi_Minh');
                    $deadline =  Carbon::parse($row->deadline);
                    $count =  $deadline->diffForHumans($now);
                    $date = $count.' ('.$deadline->format('d/m/Y').')';
                    return $date;
                })
                ->addColumn('career', function($row){
                    return Career::find($row->career_id)->name;
                })
                ->addColumn('status', function($row){
                    if ($row->status == 0) {
                        $status = '<span class="badge badge-pill badge-danger">Đã tắt</span>';
                    }else{
                        $status = '<span class="badge badge-pill badge-success">Đang chạy</span>';
                    }
                    return $status;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="'.route('employer.editJobPost', ['id' => $row->id]).'" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        }
    }
}
