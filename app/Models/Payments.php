<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'amount',
        'user_id',
    ];
    public function bookings()
    {
        return $this->belongsTo(Bookings::class);
    }
}
