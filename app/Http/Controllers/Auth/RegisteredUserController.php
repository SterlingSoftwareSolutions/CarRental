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
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.home');
    }

    public function new_register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'min:3' ,'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Users::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Users::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
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
            'attachment_type' => "User Image"
        ]);
        return redirect(RouteServiceProvider::HOME);
    }

    public function update(Request $request)
    {
        $user = Users::find($request->userid);


        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'Address_1' => 'required|string|max:255',
            'Address_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'driving_license' => 'required|string|max:255',
            'driving_license_expire_year' => 'required|integer|min:' . date('Y'),
            'driving_license_expire_month' => 'required|integer|min:1|max:12',
            'driving_license_expire_date' => 'required|integer|min:1|max:31'
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/user_images');
            Attachments::updateOrCreate(['referenceId' => $user->id,], ['file_path' => $imagePath,], ['attachment_type' => "User Image"]);
        }
        $user->update($validatedData);

        
        if (Auth::check() && Auth::user()->id === $user['id']) {
            Session::put('user_data', $user);
        }

        return redirect()->route('users.all')
            ->with('success', 'User details updated successfully.');
    }

    public function destroy($id)
    {
        $user = Users::find($id);

        if (!$user) {
            dd($id);
            return redirect()->route('users.all')
                ->with('error', 'User not found.');
        }

        // Delete user's attachment if it exists
        Attachments::where('referenceId', $user->id)->delete();

        $user->delete();

        return redirect()->route('users.all')
            ->with('success', 'User deleted successfully.');
    }
}
