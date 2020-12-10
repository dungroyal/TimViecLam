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
                $JobSeeker = JobSeeker::findOrFail(Auth::guard('job_seeker')->user()->id);
                $profile = Profiles::findOrFail($JobSeeker->id);

                $JobSeeker->name = $request->name;
                $JobSeeker->email = $request->email;
                $JobSeeker->phone = $request->phone;
                $profile->birthday = $request->birthday;
                $profile->address = $request->address;
                $profile->work_location = $request->city;
                $profile->gender = $request->sex;
                $profile->marital_status = $request->marriage;
            
                $JobSeeker->save();
                $profile->save();

                return response()->json(['success'=>'Cập nhật thành công.']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        return view('job_seeker.page.profile.information');
    }
    
    public function complete_profile2(Request $request)
    {
        return view('job_seeker.page.profile.profile');
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
