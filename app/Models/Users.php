<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'email',
        'Address_1',
        'Address_2',
        'city',
        'zip',
        'country',
        'driving_license',
        'driving_license_expire_year',
        'driving_license_expire_month',
        'driving_license_expire_date',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function images()
    {
        return $this->hasMany(Attachments::class, 'referenceId'); // Use 'vehicle_id' as the foreign key column
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'user_id', 'id');
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class, Bookings::class, 'user_id', 'id');
    }

    public function surcharges()
    {
        return $this->hasManyThrough(Surcharge::class, Bookings::class, 'user_id', 'id');
    }
}
