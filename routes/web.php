<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateBookingController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SurchargeController;
use Illuminate\Http\Request;
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

Route::get('/view/{view}', function ($view) {
    return view($view);
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/carlist', [VehiclesController::class, 'index'])->name('carlist');

Route::get('search-carlist', [VehiclesController::class, 'search'])->name('search_vehicle');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/send', [ContactController::class, 'send'])->name('contact.email');

Route::middleware('auth')->group(function () {

    Route::get('/user/dashboard', [DashboardController::class, 'client'])->name('user.dashboard');
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/invoices/{invoice}/pay', [InvoiceController::class, 'payment']);
    Route::post('/invoices/{invoice}/pay', [InvoiceController::class, 'payment_post']);
    Route::post('/car_rent/payment-final', [PaymentsController::class, 'store'])->name('payment.saving');

    // Step 1 - Choose vehicle
    Route::get('/carlist/{vehicle}', [VehiclesController::class, 'view_vehicle'])->name('vehicles.show');

    // Step 2 - Create booking
    Route::post('/bookings/create', [CreateBookingController::class, 'store'])->name('bookings.store');

    // Step 3 - Agree
    Route::get('/bookings/{booking}/agree', [CreateBookingController::class, 'agreement_form'])->name('bookings.agree');
    Route::post('/bookings/{booking}/agree', [CreateBookingController::class, 'agree'])->name('bookings.agree');

    // Step 4 - Pay
    Route::get('/bookings/{booking}/pay', [CreateBookingController::class, 'payment_form'])->name('bookings.pay');
    Route::post('/bookings/{booking}/pay', [CreateBookingController::class, 'pay'])->name('bookings.pay');

    // Admin Only Routes 
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
        Route::resource('users', UsersController::class);
        Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('delete_user');

        Route::delete('/vehicle/{vehicle}', [VehiclesController::class, 'destroy'])->name('delete_vehicle');
        Route::put('/vehicle', [VehiclesController::class, 'update'])->name('vehicle_update');
        Route::get('/vehicles', [VehiclesController::class, 'show_all_vehicles'])->name('vehicles.all');
        Route::get('/vehicles', [VehiclesController::class, 'searchs'])->name('vehicles.all');
        Route::get('/vehicles/create', [VehiclesController::class, 'create'])->name('vehicles.create');
        Route::get('/vehicles/{vehicle}/edit', [VehiclesController::class, 'edit_vehicle'])->name('vehicle.edit');
        Route::get('/vehicles/{vehicle}', [VehiclesController::class, 'show'])->name('vehicle.show');
        Route::post('/vehicles', [VehiclesController::class, 'store'])->name('vehicles.store');

        Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.all');
        Route::get('/bookings', [BookingsController::class, 'searchs'])->name('bookings.all');
        Route::get('/bookings/{booking}', [BookingsController::class, 'show'])->name('bookings.show');
        Route::post('/bookings/{booking}/surcharge', [BookingsController::class, 'add_surcharge'])->name('bookings.surcharge');
        Route::post('/bookings/{booking}/return', [BookingsController::class, 'return'])->name('bookings.return');
        Route::post('/bookings/{booking}/return_confirm', [BookingsController::class, 'return_confirm'])->name('bookings.return_confirm');
        Route::delete('/booking/{bookingId}', [BookingsController::class, 'destroy'])->name('delete_booking');
        Route::get('/bookings/{booking}/edit', [BookingsController::class, 'edit'])->name('bookings.edit');
        Route::post('/bookings/{booking}/approve', [BookingsController::class, 'approve_booking'])->name('bookings.approve');
        Route::put('/bookings/{booking}', [BookingsController::class, 'update'])->name('bookings.update');

        Route::get('/surcharges', [SurchargeController::class, 'index'])->name('surcharges.all');
    });

});

require __DIR__ . '/auth.php';
