<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'vin',
        'body_type',
        'year',
        'fuel_type',
        'transmission',
        'mileage',
        'color',
        'luggage',
        'doors',
        'price',
        'passengers',
        'short_Description',
        'description'
        
    ];

    public function images()
    {
        return $this->hasMany(Attachments::class, 'referenceId')
            ->where('attachment_type', 'Vehicle Image'); // Add the condition to filter by attachment type
    }
    

}
