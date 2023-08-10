<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show_all_users(Request $request)
    {
        return view('pages.admin.users', [
            'user' => $request->user(),
        ]);
    }
}
