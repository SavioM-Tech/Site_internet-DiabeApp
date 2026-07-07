<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonationController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/home', [PageController::class, 'index']);

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

Route::get('/confidentialite', [PageController::class, 'confidentialite'])->name('privacy');

// Lien court vers l'APK de test Android (redirige vers le build EAS courant)
Route::redirect('/test', 'https://expo.dev/accounts/saviomilandou/projects/diabe-app/builds/40e93a1a-2505-4cd6-b848-26d3fd36085a')->name('test.android');

// Routes de donation
Route::post('/donation/create-checkout-session', [DonationController::class, 'createCheckoutSession'])->name('donation.checkout');
Route::get('/donation/success', [DonationController::class, 'success'])->name('donation.success');
Route::get('/donation/cancel', [DonationController::class, 'cancel'])->name('donation.cancel');