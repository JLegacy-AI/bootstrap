<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCharges extends Model
{
    protected $table = 'services_charges';
    protected $fillable = [
        'parking_charges',
        'extra_day_charges',
        'car_wash_ext',
        'car_wash_int',
        'car_wash_com'
    ];
}