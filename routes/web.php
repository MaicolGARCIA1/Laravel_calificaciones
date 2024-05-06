<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/google-auth/redirect', [GoogleController::class, 'redirectToGoogle']);
Route::get('/google-auth/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/central', function () {
    return view('central');
});

Route::get('/norte', function () {
    return view('norte');
});

Route::get('/campus', function () {
    return view('campus');
});

Route::get('/error', function () {
    // Redirige a la vista 'central' en caso de error
    return redirect('/central');
})->name('error');

Route::post('/ratings', [RatingController::class, 'store']);
