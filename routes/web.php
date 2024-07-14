<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Models\Mobil;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mobils = Mobil::paginate(5);
    return view('mobils.index', compact('mobils'));
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('mobils', MobilController::class)->middleware('auth');
