<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/carlist', [VehiclesController::class, 'index'])->name('carlist');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/carlist/single-car-view/{id}', [VehiclesController::class, 'view_vehicle'])->name('booknow');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'client']);
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/car_rent/payment', [PaymentsController::class, 'index'])->name('payment');

    // Admin Only Routes 
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
        Route::get('/users', [UsersController::class, 'show_all_users'])->name('users.all');
        Route::get('/user/{user_id}', [UsersController::class, 'edit_user'])->name('user.edit');
        Route::put('/user', [RegisteredUserController::class, 'update'])->name('update_user');
        Route::delete('/user/{user_id}', [RegisteredUserController::class, 'destroy'])->name('delete_user');
        Route::delete('/vehicle/{user_id}', [VehiclesController::class, 'destroy'])->name('delete_vehicle');
        Route::put('/vehicle', [VehiclesController::class, 'update'])->name('vehicle_update');
        Route::get('/vehicles', [VehiclesController::class, 'show_all_vehicles'])->name('vehicles.all');
        Route::get('/vehicles/{vehicle_id}', [VehiclesController::class, 'edit_vehicle'])->name('vehicle.edit');
        Route::post('/vehicles', [VehiclesController::class, 'store'])->name('vehicles.store');
        Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.all');
        Route::delete('/booking/{bookingId}', [BookingsController::class, 'destroy'])->name('delete_booking');
    });

});

require __DIR__ . '/auth.php';
