<?php

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

Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/users', [UsersController::class, 'show_all_users'])->name('users.all');
    Route::get('/admin/vehicles', [VehiclesController::class, 'show_all_vehicles'])->name('vehicles.all');
    Route::post('/admin/vehicles', [VehiclesController::class, 'store'])->name('vehicles.all');
});

require __DIR__ . '/auth.php';

