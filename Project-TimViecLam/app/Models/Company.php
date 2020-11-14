<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Notifiable;
    protected $table='companies';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'employer_id',
        'name',
        'slogan',
        'description',
        'website',
        'business_license',
        'logo',
        'cover_photo'
    ];
}
