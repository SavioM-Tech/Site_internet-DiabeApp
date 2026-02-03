<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonationController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

// Routes de donation
Route::post('/donation/create-checkout-session', [DonationController::class, 'createCheckoutSession'])->name('donation.checkout');
Route::get('/donation/success', [DonationController::class, 'success'])->name('donation.success');
Route::get('/donation/cancel', [DonationController::class, 'cancel'])->name('donation.cancel');