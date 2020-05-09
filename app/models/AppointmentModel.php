<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    protected $table = "appointment";

    protected $fillable = [
    	'appointmentdate',
    	'hour'
    	
    ];
}