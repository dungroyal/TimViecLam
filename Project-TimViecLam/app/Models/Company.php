<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Notifiable;
    protected $table='companies';

    protected $fillable = [
        'address',
        'address_contact',
        'career', 
        'city', 
        'email_contact',
         'employer_id',
          'name_company',
           'name_contact',
            'personnel_size',
             'phone',
              'phone_contact',
               'status'
    ];

    public function jobs(){
    	return $this->hasMany('App\Models\Job');
    }
}
