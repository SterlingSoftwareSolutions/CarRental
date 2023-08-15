<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show_all_users(Request $request)
    {
        $users = Users::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'User Image');
        }])->get();
        return view('pages.admin.users.index', ['users' => $users]);
    }

    public function index(Request $request)
    {

    }

    public function edit_user(Request $request,  $userid)
    {
        //dd($request);
        $users = Users::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'User Image');
        }])->get();

        $user = Users::query()
            ->with(['images' => function ($query) {
                $query->where('attachment_type', 'User Image');
            }])
            ->find($userid);

        return view('pages.admin.users.index', ['users' => $users, 'user_one' =>  $user]);
    }

    public function show(Users $user){
        
    }
}
