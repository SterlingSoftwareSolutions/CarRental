<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show_all_users(Request $request)
    {
        $query = Users::query(); 
        $users = $query->get();
// dd($users);
        return view('pages.admin.users', ['users' => $users]);
    }
    public function index(Request $request)
    {
        
    }
}
