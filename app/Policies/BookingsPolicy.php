<?php

namespace App\Policies;

use App\Models\Bookings;
use App\Models\Users;
use Illuminate\Auth\Access\Response;

class BookingsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Users $users): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Users $users, Bookings $bookings): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Users $users): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Users $users, Bookings $bookings): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Users $users, Bookings $bookings): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Users $users, Bookings $bookings): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Users $users, Bookings $bookings): bool
    {
        //
    }
}
