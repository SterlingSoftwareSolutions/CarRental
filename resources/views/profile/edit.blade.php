@extends('layouts.main')
@section('content')
    <div class="py-12 max-w-[1000px] mx-auto">
        <div class="mx-auto space-y-6 sm:px-6 lg:px-8">
            @if(session('prompt'))
            <div class="mx-auto bg-green-200 text-green-900 p-5 rounded-lg">
                Registration Successful! Complete your profile details below.
            </div>
            @endif
            <h1 class="font-semibold text-lg text-[#707070] text-center">Edit Your Profile</h1>
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="w-full sm:hidden md:block">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection