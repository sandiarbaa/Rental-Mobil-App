<?php

use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('components.dashboard');
});

Route::resource('mobils', MobilController::class);
