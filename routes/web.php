<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/carlist', function () {
    return view('pages.carlist');
})->name('carlist');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/users', [UsersController::class, 'show_all_users'])->name('users.all');
    Route::get('/admin/user/{user_id}', [UsersController::class, 'edit_user'])->name('user.edit');
    Route::get('/admin/vehicles', [VehiclesController::class, 'show_all_vehicles'])->name('vehicles.all');
    Route::get('/admin/vehicles/{vehicle_id}', [VehiclesController::class, 'edit_vehicle'])->name('vehicle.edit');
    Route::post('/admin/vehicles', [VehiclesController::class, 'store'])->name('vehicles.all');
    Route::put('/admin/user', [RegisteredUserController::class, 'update'])->name('update_user');
    Route::get('/admin/user/{user_id}', [RegisteredUserController::class, 'destroy'])->name('delete_user');
});

require __DIR__ . '/auth.php';
