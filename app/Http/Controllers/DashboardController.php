<?php

namespace App\Http\Controllers;

use App\Models\Users;
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

        return view('pages.admin.dashboard', ['user' => $user]);
    }

    public function client(Request $request)
    {
        $user = $request->user();
        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }
        return view('pages.client.dashboard');
    }
}
