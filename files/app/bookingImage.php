<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookingImage extends Model
{
    protected $table = 'booking_images';
    protected $fillable = [
        'booking_id','path'
    ];
}
