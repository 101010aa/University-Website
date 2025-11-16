<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\ContactController;

// Temporary fix for root route
Route::get('/', function () {
    return response()->json(['message' => 'API is working']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

// ADD YOUR CONTACT ROUTE HERE
Route::post('/api/contact', [ContactController::class, 'store']);

require __DIR__.'/settings.php';