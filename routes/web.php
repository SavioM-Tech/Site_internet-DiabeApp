<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');
