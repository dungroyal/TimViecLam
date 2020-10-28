<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use Notifiable;
    protected $table='experience';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
