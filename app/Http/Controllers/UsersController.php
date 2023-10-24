<?php

namespace App\Http\Controllers;

use App\Models\Attachments;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Events\Routing;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return view('pages.admin.users.index', ['users' => $query->get()]);
    }

    public function show(Users $user)
    {
        return view('pages.admin.users.show', compact('user'));
    }

    public function create()
    {
        return view('pages.admin.users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'Address_1' => 'required|string|max:255',
            'Address_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'driving_license' => 'required|string|max:255|unique:users,driving_license',
            'driving_license_expire_year' => 'required|integer|min:' . date('Y'),
            'driving_license_expire_month' => 'required|integer|min:1|max:12',
            'driving_license_expire_date' => 'required|integer|min:1|max:31',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'required|image|max:2048', // Max file size of 2MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Users::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'Address_1' => $request->Address_1,
            'Address_2' => $request->Address_2,
            'city' => $request->city,
            'zip' => $request->zip,
            'driving_license' => $request->driving_license,
            'driving_license_expire_year' => $request->driving_license_expire_year,
            'driving_license_expire_month' => $request->driving_license_expire_month,
            'driving_license_expire_date' => $request->driving_license_expire_date,
            'password' => Hash::make($request->password),
        ]);

        $user_image = $request->file('image')->store('public/user_images');

        Attachments::create([
            'referenceId' => $user->id,
            'file_path' => $user_image,
            'attachment_type' => "User Image"
        ]);

        return redirect(route('users.index'));
    }

    public function edit(Users $user)
    {
        return view('pages.admin.users.edit', compact('user'));
    }

    public function update(Users $user, Request $request)
    {
        $values = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'Address_1' => 'required|string|max:255',
            'Address_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'driving_license' => 'required|string|max:255|unique:users,driving_license,' . $user->id,
            'driving_license_expire_year' => 'required|integer|min:' . date('Y'),
            'driving_license_expire_month' => 'required|integer|min:1|max:12',
            'driving_license_expire_date' => 'required|integer|min:1|max:31',
        ]);

        $user->update($values);
        return redirect(route('users.show', $user->id));
    }

    public function destroy($id)
    {
        $user = Users::find($id);

        if (!$user) {
            dd($id);
            return redirect()->route('users.index')
                ->with('error', 'user not found.');
        }

        // Delete vehicle's attachment if it exists
        Attachments::where('referenceId', $user->id)->delete();

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'user deleted successfully.');
    }
}
