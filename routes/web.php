<?php

use App\Http\Controllers\DriversignupController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicledescController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SeevehicleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/driversignup',[DriversignupController::class,'driversignup'])->name('driversignup');
Route::post('/createdriver',[DriversignupController::class,'createdriver'])->name('createdriver');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/vehicle',[VehicleController::class,'vehicle'])->name('vehicle');
Route::get('/vehicledesc',[VehicledescController::class,'vehicledesc'])->name('vehicledesc');
Route::post('/search',[SearchController::class,'search'])->name('search');
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::get('/booking',[BookingController::class,'booking'])->name('booking');
Route::post('/vehicledescs/{id}',[VehicledescController::class,'vehicledescs'])->name('vehicledescs');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/enquirycontact',[ContactController::class,'enquirycontact'])->name('enquirycontact');
Route::post('/bookings/{id}',[BookingController::class,'bookings'])->name('bookings');
Route::post('/deletebooking/{id}',[BookingController::class,'deletebooking'])->name('deletebooking');
Route::get('/seevehicle/{id}',[SeevehicleController::class,'seevehicle'])->name('seevehicle');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';