<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    protected $table = 'timeslots';
    protected $fillable = [
        'timeslot','status'
    ];
}