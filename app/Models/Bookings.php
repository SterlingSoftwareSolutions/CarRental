<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'pickup',
        'dropoff',
        'pickup_time',
        'dropoff_time',
        'vehicle_id',
        'status',
        'user_id'
    ];

    public function duration(){
        $pickup_time = new DateTime($this->pickup_time);
        $dropoff_time = new DateTime($this->dropoff_time);
        $days = $dropoff_time->diff($pickup_time)->days;
        return $days;
    }

    public function amount(){
        return $this->duration() * ($this->vehicle->price ?? null);
    }

    // Define the relationship with the Vehicle model
    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class);
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

}
