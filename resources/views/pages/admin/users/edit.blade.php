<x-app-layout>
    <!-- Side Bar  -->
    <x-admin-sidebar />
    <div class="sm:ml-64 p-6">
        <div class="mt-10">
            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white  ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6" id="adduser">Edit {{$user->first_name}} {{$user->last_name}}'s Profile</h1>
                    <x-user-form :user="$user"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>