<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Maksimal 5 kiriman per 10 menit per IP.
Route::post('/contact', [ContactMessageController::class, 'store'])
    ->middleware('throttle:5,10')
    ->name('contact.store');
