<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking_details';
    protected $fillable = [
        'user_id',
        'airport',
        'vehicle','vehiclemodel','vehiclefaculty',
        'start_date', 'start_time', 'end_date','end_time', 'car_type', 'service',
        'price', 'service_type', 'name','email', 'phone', 'no_of_seats','days_difference','parking_charges','services_charges'
    ];

    public function images()
    {
        return $this->hasMany('App\bookingImage');
    }
}
