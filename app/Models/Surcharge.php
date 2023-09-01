<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surcharge extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'type',
        'date',
        'amount',
        'note',
        'paid',
    ];

    public function booking()
    {
        return $this->belongsTo(Bookings::class);
    }
}
