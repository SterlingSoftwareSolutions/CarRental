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
        'returned_on',
        'vehicle_id',
        'approval',
        'status',
        'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'pickup_time' => 'datetime',
        'dropoff_time' => 'datetime',
        'returned_on' => 'datetime',
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
