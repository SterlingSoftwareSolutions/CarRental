@extends('layouts.main')
@section('content')
    <div class="py-12">
    <h1 class="p-4 font-semibold text-xl text-[#707070] text-center">Edit Your Profile</h1>
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 mx-auto bg-white shadow max-w-[60%] sm:p-8 sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 mx-auto bg-white shadow max-w-[60%] sm:p-8 sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 mx-auto bg-white shadow max-w-[60%] sm:p-8 sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection