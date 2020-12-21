<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\JobSeeker;

class Job extends Model
{
    use Notifiable;
    protected $table='job';

    protected $fillable = [
        'id',
        'job_code',
        'company_id',
        'employer_id',
        'name_job',
        'type_job_id',
        'amount',
        'career_id',
        'grade_id',
        'salary_id',
        'degree_id',
        'experience_id',
        'address',
        'city',
        'description',
        'job_requirements',
        'sex_requirements',
        'profile_request',
        'benefits',
        'name_contact',
        'phone_contact',
        'address_contact',
        'email_contact',
        'deadline',
        'slug',
        'status'
    ];

    public function company(){
    	return $this->belongsTo('App\Models\Company');
    }
    
    public function job_seeker(){
        return $this->belongsToMany(JobSeeker::class,'apply')->withTimeStamps();
    }

    public function saveJob(){
        return $this->belongsToMany(JobSeeker::class,'save_job')->withTimeStamps();
    }
}
