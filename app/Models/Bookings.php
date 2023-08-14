<?php

namespace App\Models; 

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
        'user_id'
    ];

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
