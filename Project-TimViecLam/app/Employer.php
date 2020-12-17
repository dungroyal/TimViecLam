<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Company;

class Employer extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table='employer';
    protected $guard = 'employer';

    protected $fillable = [
        'name_company',
        'email', 
        'email_verified_at', 
        'password',
        'career', 
        'address', 
        'city', 
        'personnel_size', 
        'name_contact', 
        'phone'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function Company(){
        return $this->hasOne(Company::class);
    }
}