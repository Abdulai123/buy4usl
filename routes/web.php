<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/create-order', function () {
    return view('create-order');
});

//Route::get('/orders', [UserController::class, 'showOrders'])->name('orders');
Route::post('/order/create', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders', [OrderController::class, 'index'])->name('orders');


Route::get('/notifications', [UserController::class, 'showNotifications'])->name('notifications');
Route::get('/referrals', [UserController::class, 'showReferrals'])->name('referrals');

Route::post('/update-referral-code', [ReferralController::class, 'updateReferralCode'])->name('update.referral.code');


Route::post('/signup', [UserController::class, 'register'])->name('signup');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/login', function () {
    return view('login');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth', 'verified')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    // Route for email verification confirmation
})->middleware(['auth', 'signed'])->name('verification.verify');
