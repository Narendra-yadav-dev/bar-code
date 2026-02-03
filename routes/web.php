<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;

Route::middleware('guest')->group(function () {
    // login
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.login');
});
// dashboard
Route::get('/log-out', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashbaord');
Route::resource('users', UserController::class)
    ->middleware('auth');
Route::get('addUser', [UserController::class, 'create'])->name('addUser');
Route::get('users/{user}/edit', [UserController::class, 'edit'])
    ->name('editUser');

Route::prefix('items')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('items.index');
    Route::get('/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/', [ItemController::class, 'store'])->name('items.store');
    Route::get('/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/{item}', [ItemController::class, 'update'])->name('items.update');

    Route::get('/createPrice', [ItemController::class, 'createPrice'])->name('items.createPrice');
});