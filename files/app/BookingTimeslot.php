<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingTimeslot extends Model
{
    protected $table = 'booking_timeslots';
    protected $fillable = [
        'start_date','end_date','total_capacity'
    ];
}
