<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Bookings;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function admin()
    {
        // Retrieve the logged-in user's ID from the session
        $usersess = auth()->user();

        $user = Users::query()
            ->with(['images' => function ($query) {
                $query->where('attachment_type', 'User Image');
            }])
            ->find($usersess->id);

        // Store the fetched user data in the session
        Session::put('user_data', $user);

        // Count the total users
        $totalUsers = $this->countUsers();

        // Retrieve the latest users
        $latestUsers = Users::latest()->take(5)->get();

        // Retrieve bookings data
        $totalBooking = $this->countBooking();

        // Call the new method to get the total vehicle count
        $totalVehicles = $this->countVehicles();

        return view('pages.admin.dashboard', ['user' => $user, 'totalBooking' => $totalBooking , 'totalVehicles' => $totalVehicles, 'totalUsers' => $totalUsers, 'latestUsers' => $latestUsers]);
    }

    public function client(Request $request)
    {
        $user = $request->user();
        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }
        return view('pages.client.dashboard');
    }

    public function countVehicles()
    {
        $totalVehicles = Vehicles::count();
        return $totalVehicles;
    }

    public function countBooking()
    {
        $totalBooking = Bookings::count();
        return $totalBooking;
    }

    public function countUsers()
    {
        $totalUsers = Users::count();
        return $totalUsers;
    }

}
