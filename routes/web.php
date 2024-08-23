<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signin');
});

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');