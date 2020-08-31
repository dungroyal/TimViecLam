<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Data extends Model
{
    use Notifiable;
    protected $table='data';
}
