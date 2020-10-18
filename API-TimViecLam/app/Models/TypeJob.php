<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TypeJob extends Model
{
    use Notifiable;
    protected $table='type_job';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

}
