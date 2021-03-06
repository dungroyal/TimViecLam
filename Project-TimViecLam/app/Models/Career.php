<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Career extends Model
{
    use Notifiable;
    protected $table='career';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    
    public function Job(){
    	return $this->hasMany(Job::class);
    }
}
