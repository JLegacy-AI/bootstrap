<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{    
    protected $table = 'cars_list';
    protected $fillable = [
        'user_id','car_brand','car_model','car_number'
    ];
}
