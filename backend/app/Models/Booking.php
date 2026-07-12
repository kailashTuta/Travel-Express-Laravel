<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';
    protected $fillable = ['trip_name', 'persons', 'price', 'mobile', 'journey_date', 'status', 'trip_id', 'package_id', 'user_id'];
    protected function casts(): array { return ['journey_date' => 'date']; }
}
