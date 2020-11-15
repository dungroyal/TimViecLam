<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use Notifiable;
    protected $table='city';
    public $timestamps = false;

    protected $fillable = [
        'id','name','type',
    ];
}
