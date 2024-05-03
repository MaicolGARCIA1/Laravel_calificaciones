<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/central', [HomeController::class, 'central']);
Route::get('/norte', [HomeController::class, 'norte']);
Route::get('/campus', [HomeController::class, 'campus']);

Route::get('/login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
