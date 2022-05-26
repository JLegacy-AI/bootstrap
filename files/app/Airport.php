<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airports';
    protected $fillable = [
        'code', 'name', 'city_name','city_code', 'country_name', 'country_code','lat','lon','status'
    ];
}