<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
            // 'status' => ['required'],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'email.required' => 'Email is required!',
    //     ];
    // }
}
