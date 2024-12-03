<?php

use App\Http\Controllers\backend\BookinglistController;
use App\Http\Controllers\backend\CarlistController;
use App\Http\Controllers\backend\DriverlistController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('frontend.home');
// });

// Route::get('/about', function () {
//     return view('frontend.about');
// });


//Frontend Side Route

Route::get('/', [HomeController::class,'index'])->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/gallery', 'frontend.gallery')->name('gallery');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/booking', 'frontend.booking')->name('booking');
Route::view('/contact', 'frontend.contact')->name('contact');


//Frontend Side Booking

Route::get('/booking', [BookingController::class,'create'])->name('book.create');
Route::post('/booking', [BookingController::class,'store'])->name('book.store');

//Admin Dashboard

Route::get('/admin/dashboard', function () {
    return view('backend.admin_dashboard');
})->middleware(['auth:admin'])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Login:Logout

Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::view('/admin/dashboard','backend.admin_dashboard');
    Route::resource('/carlist', CarlistController::class);
    Route::resource('/driver', DriverlistController::class);
    Route::resource('/booking', BookinglistController::class);
    Route::get('/booking/status/{id}',[BookinglistController::class,'changeStatus'])->name('changeStatus');

});

//Client Route

Route::middleware('guest:client')->prefix('client')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'login'])->name('client.login');
    Route::post('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'check_user']);

    Route::get('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'register'])->name('client.register');
    Route::post('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'check_user']);


});

Route::middleware('auth:client')->prefix('client')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Client\LoginController::class, 'logout'])->name('client.logout');

    Route::view('/dashboard','backend.client_dashboard');

});