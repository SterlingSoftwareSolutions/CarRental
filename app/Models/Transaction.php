<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'amount',
        'stripe_payment_id'
    ];

    public function booking(){
        return $this->belongsTo(Bookings::class);
    }
}
