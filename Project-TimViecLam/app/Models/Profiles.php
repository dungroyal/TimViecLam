<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use Notifiable;
    protected $table='profiles';

    public function JobSeeker(){
    	return $this->belongsTo('App\JobSeeker');
    }
}
