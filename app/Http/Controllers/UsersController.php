<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $query = Users::query();

        if($request->search){
            $term = $request->search;
            $query->where('first_name', $term)
                ->orWhere('last_name', 'like', '%' . $term . '%')
                ->orWhere('mobile', 'like', '%' . $term . '%')
                ->orWhere('email', 'like', '%' . $term . '%')
                ->orWhere('Address_1', 'like', '%' . $term . '%')
                ->orWhere('Address_2', 'like', '%' . $term . '%')
                ->orWhere('city', 'like', '%' . $term . '%')
                ->orWhere('country', 'like', '%' . $term . '%')
                ->orWhere('zip', 'like', '%' . $term . '%');
        }

        $users = $query->get();

        return view('pages.admin.users.index', ['users' => $users]);
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
        $bookings = $user->bookings;
        $fines_tolls = null;
        return view('pages.admin.users.show', compact('user', 'bookings', 'fines_tolls'));
    }
}
