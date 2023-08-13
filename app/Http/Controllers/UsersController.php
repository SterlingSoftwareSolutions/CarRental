<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show_all_users(Request $request)
    {
        $query = Users::query();
        $users = $query->with('images')->get();
        return view('pages.admin.users', ['users' => $users]);
    }
    public function index(Request $request)
    {
    }

    public function edit_user(Request $request,  $userid)
    {
        //dd($request);
        $query = Users::query();
        $users = $query->with('images')->get();

        $user = Users::with('images')->find($userid);

        return view('pages.admin.users', ['users' => $users, 'user_one' =>  $user]);
    }
}
