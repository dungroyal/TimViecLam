<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use Notifiable;
    protected $table='grade';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
