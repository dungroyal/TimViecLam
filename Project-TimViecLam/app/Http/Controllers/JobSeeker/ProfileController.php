<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\JobSeeker;
use App\Models\Profiles;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:job_seeker');
    }

    public function index()
    {
        return view('job_seeker.page.profile.manager');
    }

    public function profileAttached()
    {
        return view('job_seeker.page.profile.attached');
    }

    public function complete_profile1(Request $request)
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::findOrFail($JobSeeker->id);
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'birthday' => 'required',
                'address' => 'required',
                'city' => 'required',
                'sex' => 'required',
                'marriage' => 'required',
            ]);

            if($validator->passes()){
                $JobSeeker->name = $request->name;
                $JobSeeker->email = $request->email;
                $JobSeeker->phone = $request->phone;
                $Profile->birthday = $request->birthday;
                $Profile->address = $request->address;
                $Profile->work_location = $request->city;
                $Profile->gender = $request->sex;
                $Profile->marital_status = $request->marriage;
            
                $JobSeeker->save();
                $Profile->save();

                return response()->json(['success'=>'Cập nhật thành công.']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        return view('job_seeker.page.profile.information',compact('Profile','JobSeeker'));
    }
    
    public function complete_profile2(Request $request)
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::findOrFail($JobSeeker->id);

        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'position' => 'required',
                'degree_id' => 'required',
                'experience_id' => 'required',
                'work_location' => 'required',
                'career_id' => 'required',
                'type_job_id' => 'required',
                'grade_id' => 'required',
                'salary_id' => 'required',
                'career_description' => 'required'
            ]);

            if($validator->passes()){
                $Profile->position = $request->position;
                $Profile->degree_id = $request->degree_id;
                $Profile->experience_id = $request->experience_id;
                $Profile->work_location = $request->work_location;
                $Profile->career_id = $request->career_id;
                $Profile->type_job_id = $request->type_job_id;
                $Profile->grade_id = $request->grade_id;
                $Profile->salary_id = $request->salary_id;
                $Profile->career_description = $request->career_description;
                $Profile->career_goals ="Mong muốn tìm được nơi có cơ hội cống hiến bản thân tốt";
                $Profile->save();

                return response()->json(['success'=>'Cập nhật thành công.']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        return view('job_seeker.page.profile.profile',compact('Profile'));
    }

    public function complete_profile3(Request $request)
    {
        return view('job_seeker.page.profile.degree');
    }

    public function complete_profile4(Request $request)
    {
        return view('job_seeker.page.profile.experience');
    }

    public function complete_profile5(Request $request)
    {
        return view('job_seeker.page.profile.skill');
    }

    public function uploadAvatars(Request $request){

        request()->validate([
        'avatar' => 'required',
        'avatar.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
       ]);
            $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
            $Profile = Profiles::findOrFail($JobSeeker->id);
            if($request->hasFile('avatar')){    
                $file = $request->file('avatar');
                $path = $file->store('uploads','public');
                $Profile->avatar = $path;
                $Profile->save();
                return response()->json(['success'=>'Upload avatar success.']);
            }
            return response()->json(['error'=>'Can not Upload avatars']);
    }
}
