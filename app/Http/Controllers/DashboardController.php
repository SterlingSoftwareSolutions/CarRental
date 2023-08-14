<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('pages.admin.dashboard');
    }

    public function client(Request $request)
    {
        $user = $request->user();
        if($user->role == 'admin'){
            return redirect('/admin/dashboard');
        }
        return view('pages.client.dashboard');
    }
}
