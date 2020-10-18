<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use Notifiable;
    protected $table='salary';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
