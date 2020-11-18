<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JobPostRequest;
use App\Models\Job;
use App\Models\Company;
use Carbon\Carbon;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
        $this->middleware(function ($request, $next) {
            $this->id = Auth::guard('employer')->user()->id;
            return $next($request);
        });
        }
        
    
    public function showCreateJobPostForm()
    {
        return view('
            employer.page.create_job',[
                'employer' => Auth::guard('employer')->user(),
                'company' => DB::table('companies')->where('employer_id', $this->id)->first()
        ]);
    }
    
    public function store(JobPostRequest $request)
    {   
        $company = Company::where('employer_id',$this->id)->first();
        Job::create([
            'job_code'=>request('job_code'), request('job_code'),
            'company_id'=>$company->id,
            'employer_id'=>$this->id,
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

        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $path = $file->store('uploads','public');
        //     Job::create([
        //         'title'=>$title=$request->get('title'),
        //         'slug'=>str_slug($title),
        //         'content'=>$request->get('content'),
        //         'image'=>$path,
        //         'status'=>$request->get('status')
        //     ]);
        // }
        return redirect('/employer')->with('message','Thêm tin tuyển dụng thành công');
    }

    public function show(JobController $test)
    {
        //
    }
    
    public function update(Request $request, JobController $test)
    {
        //
    }
    
    public function destroy(JobController $test)
    {
        //
    }
}
