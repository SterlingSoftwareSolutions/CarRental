@extends('layouts.main')
@section('content')
    <div class="py-12 max-w-[1000px] mx-auto">
        <div class="mx-auto space-y-6 sm:px-6 lg:px-8">
            @if(session('success'))
            <div class="mx-auto bg-green-100 border border-green-300 text-green-900 p-5 rounded-lg" id="successMessage">
                {{session('success')}}
            </div>
            @endif
            @if($errors->any() || $errors->updatePassword->any() || $errors->userDeletion->any())
            <div class="mx-auto bg-red-100 border border-red-300 text-red-900 p-5 rounded-lg" id="errorMessage">
                Error: {{$errors->updatePassword->first()}}
                {{$errors->userDeletion->first()}}
                {{$errors->first()}}
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
    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById('successMessage').remove()
        }, 7500);
    </script>
@endsection
