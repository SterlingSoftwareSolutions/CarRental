<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Attachments;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.home');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Users::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        //dd($request);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'Address_1' => 'required|string|max:255',
            'Address_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'driving_license' => 'required|string|max:255|unique:users,driving_license',
            'driving_license_expire_year' => 'required|integer|min:' . date('Y'),
            'driving_license_expire_month' => 'required|integer|min:1|max:12',
            'driving_license_expire_date' => 'required|integer|min:1|max:31',
            'email' => 'required|email|unique:users,email',
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
            'Address_1' => $request->Address_1,
            'Address_2' => $request->Address_2,
            'city' => $request->city,
            'zip' => $request->zip,
            'driving_license' => $request->driving_license,
            'driving_license_expire_year' => $request->driving_license_expire_year,
            'driving_license_expire_month' => $request->driving_license_expire_month,
            'driving_license_expire_date' => $request->driving_license_expire_date,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $imagePath = $request->file('image')->store('public/user_images');
        Attachments::create([
            'referenceId' => $user->id,
            'file_path' => $imagePath,
        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
