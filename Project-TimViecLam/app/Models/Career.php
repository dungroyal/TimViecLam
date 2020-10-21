<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use Notifiable;
    protected $table='career';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
