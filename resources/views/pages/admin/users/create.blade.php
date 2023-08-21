<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />
    <div class="sm:ml-64 p-6">
        <div class="mt-10">
            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white  ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6" id="adduser">Add a New User</h1>
                    <x-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>