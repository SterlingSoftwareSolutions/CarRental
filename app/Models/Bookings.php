<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bookings extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'pickup_time' => 'date',
        'dropoff_time' => 'date',
        'returned_time' => 'date',
    ];

    public function duration(){
        $pickup_time = new DateTime($this->pickup_time);
        if($this->returned_on){
            $dropoff_time = new DateTime($this->returned_on);
        } else{
            $dropoff_time = new DateTime($this->dropoff_time);
        }
        $days = $dropoff_time->diff($pickup_time)->days;
        return $days;
    }

    public function amount(){
        return $this->duration() * ($this->vehicle->price ?? null);
    }

    public function amount_paid(){
        return $this->transactions->sum('amount');
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

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'booking_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'booking_id');
    }

    public function surcharges()
    {
        return $this->hasMany(Surcharge::class, 'booking_id');
    }
}
