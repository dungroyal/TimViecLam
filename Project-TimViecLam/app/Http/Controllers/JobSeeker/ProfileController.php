<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\JobSeeker;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    public function getProfileById(Request $request){
        $DegreeDetails = DB::table('degree_details')->where('id',$request->idDegree)->first();
        return response()->json(['degree_details'=>$DegreeDetails]);
    }

    public function complete_profile1(Request $request)
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();

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
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();

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
        return view('job_seeker.page.profile.profile',compact('Profile','JobSeeker'));
    }

    public function complete_profile3(Request $request)
    {
        $method = $request->method();
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        if ($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'idDegree'=> 'required',
                'university' => 'required',
                'faculty' => 'required',
                'certificate' => 'required',
                'major' => 'required',
                'ranked' => 'required',
                'month_start' => 'required',
                'year_start' => 'required',
                'graduation_year' => 'required',
                'graduation_month' => 'required'
            ]);
            if($validator->passes()){
                if($request->idDegree == 0){
                    DB::table('degree_details')->insert([
                        'id_profile' => $Profile->id,
                        'university' => $request->university,
                        'faculty' => $request->faculty,
                        'certificate' => $request->certificate,
                        'major' => $request->major,
                        'ranked' => $request->ranked,
                        'detail' => $request->detail,
                        'month_start' => $request->month_start,
                        'year_start' => $request->year_start,
                        'graduation_month' => $request->graduation_month,
                        'graduation_year' => $request->graduation_year,
                        'status' => 1,
                    ]);
                    return view('job_seeker.element.item_degree',compact('request'));
                }else{
                    $idDegree = $request->idDegree;
                    DB::table('degree_details')
                        ->where('id',$idDegree)
                        ->update([
                            'university' => $request->university,
                            'faculty' => $request->faculty,
                            'certificate' => $request->certificate,
                            'major' => $request->major,
                            'ranked' => $request->ranked,
                            'detail' => $request->detail,
                            'month_start' => $request->month_start,
                            'year_start' => $request->year_start,
                            'graduation_month' => $request->graduation_month,
                            'graduation_year' => $request->graduation_year
                        ]);
                    return view('job_seeker.element.item_degree',compact('request','idDegree'));
                }
            }
            return view('job_seeker.page.profile.degree',compact('JobSeeker','Profile'));
        }
        return view('job_seeker.page.profile.degree',compact('JobSeeker','Profile'));
    }
    
    public function complete_profile3_delete(Request $request){
        if ($request->ajax()) {
            DB::table('degree_details')->delete($request->idDegree);

            return response()->json(['success'=>'Xóa thành công.']);
        }
        return response()->json(['error'=>'Xóa không thành công.']);
    }

    public function complete_profile4(Request $request)
    {
        $method = $request->method();
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        if ($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'position' => 'required',
                'company' => 'required',
                'month_start' => 'required',
                'year_start' => 'required',
                'month_end' => 'required',
                'year_end' => 'required'
            ]);
            DB::table('experience_detail')->insert([
                'id_profile' => $Profile->id,
                'position' => $request->position,
                'company' => $request->company,
                'month_start' => $request->month_start,
                'year_start' => $request->year_start,
                'month_end' => $request->month_end,
                'year_end' => $request->year_end,
                'status' => 1,
            ]);
            if ($request->ajax()) {
                return view('job_seeker.element.item_experience.blade',compact('request'));
            }
            return view('job_seeker.page.profile.experience',compact('JobSeeker','Profile'));
        }
        return view('job_seeker.page.profile.experience',compact('JobSeeker','Profile'));
    }

    public function complete_profile5(Request $request)
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();

        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'professional_skills' => 'required',
                'other_skill' => 'required'
            ]);

            if($validator->passes()){
                if(DB::table('skill_detail')->where('id_profile',$JobSeeker->id)->count() == 0){
                    DB::table('skill_detail')->insert([
                        'id_profile' => $Profile->id,
                        'professional_skills' => $request->professional_skills,
                        'other_skill' => $request->other_skill
                    ]);
                }else{
                    DB::table('skill_detail')
                    ->where('id_profile',$Profile->id)
                    ->update([
                        'professional_skills' => $request->professional_skills,
                        'other_skill' => $request->other_skill
                    ]);
                }                
                return response()->json(['success'=>'Cập nhật thành công.']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        return view('job_seeker.page.profile.skill',compact('JobSeeker','Profile'));
    }

    public function complete_profile_public(Request $request)
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        $Profile->status =2;
        $Profile->save();
        return redirect()->route('job-seeker.profile_manager');
    }

    public function uploadAvatars(Request $request){
        request()->validate([
        'avatar' => 'required',
        'avatar.*' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);
        
            $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
            $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
            if($request->hasFile('avatar')){    
                $file = $request->file('avatar');
                $path = $file->store('uploads/images','public');
                $Profile->avatar = $path;
                $Profile->save();
                return response()->json(['success'=>'Upload avatar success.']);
            }
            return response()->json(['error'=>'Can not Upload avatars']);
    }

    public function profileAttached()
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        return view('job_seeker.page.profile.attached',compact('JobSeeker','Profile'));
    }

    public function attachedProfile(Request $request){
        if($request->idAttached == 0){
            $validator = Validator::make($request->all(), [
                'attachedProfile'=>'required|mimes:pdf,doc,docx|max:30000'
            ]);
    
            if($validator->passes()){
                $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
                $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
                if($request->hasFile('attachedProfile')){    
                    $file = $request->file('attachedProfile');
                    $path = $file->store('uploads/files','public');
                    $Profile->attached_profile = $path;
                    $Profile->save();
                    return response()->json(['success'=>'Tải lên hồ sơ thành công!']);
                }
                return response()->json(['error'=>'Tải lên không thành công!']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);
        }else{
            return "DELETEeeeeeeeeeee";
        }
   }

    public function attachedProfileDownload()
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        $type = Str::afterLast($Profile->attached_profile, '.');
        $file = public_path().'/'.$Profile->attached_profile;
        $name = 'Hồ sơ '.$JobSeeker->name.' - Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz.'.$type;
        $headers = array('Content-Type: application/'.$type,);
        return Response::download($file, $name, $headers);
    }

    public function attachedProfileDelete()
    {
        $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
        $Profile = Profiles::where('job_seeker_id', $JobSeeker->id)->first();
        $Profile->attached_profile = null;
        $Profile->save();
        return redirect()->back()->with('message','Xóa hồ sơ thành công!');
    }
}
