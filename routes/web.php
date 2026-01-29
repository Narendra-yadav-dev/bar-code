<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // login
    Route::get('/',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('auth.login');
});
// dashboard
Route::get('/log-out',[AuthController::class,'logout'])->name('auth.logout');
Route::get('/dashboard',[DashboardController::class,'index']);