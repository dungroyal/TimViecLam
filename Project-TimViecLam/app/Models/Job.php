<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use Notifiable;
    protected $table='job';

    // protected $fillable = [
    //     'name'
    // ];
}
