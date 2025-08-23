<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeoDashboardController;
use App\Http\Controllers\ListingController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('/', function () {
        return view('dashboard.index');
    });
    Route::resource('users', UserController::class);
    Route::get('/geo', [GeoDashboardController::class, 'index'])->name('geo.dashboard');
    Route::get('/geo/wards/{provinceCode}', [GeoDashboardController::class, 'getWardsByProvince'])->name('geo.wards.by_province');
    Route::resource('listings', ListingController::class);
});
