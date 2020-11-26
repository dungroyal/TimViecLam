<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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

    public function complete_profile1()
    {
        return view('job_seeker.page.profile.information');
    }
    
    public function complete_profile2()
    {
        return view('job_seeker.page.profile.profile');
    }

    public function complete_profile3()
    {
        return view('job_seeker.page.profile.degree');
    }

    public function complete_profile4()
    {
        return view('job_seeker.page.profile.experience');
    }

    public function complete_profile5()
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
