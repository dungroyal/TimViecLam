<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use Notifiable;
    protected $table='degree';
    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'image',
    ];

}
