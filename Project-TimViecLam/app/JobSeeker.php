<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profiles;

class JobSeeker extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table='job_seeker';
    protected $guard = 'job_seeker';

    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'phone', 'access_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profiles(){
        return $this->hasOne(Profiles::class);
    }
}