<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ScanController;

Route::get('/', [DashboardController::class, 'index'])->name('dashbaord');

Route::prefix('qr-code')->group(function () {
   // Route::get('/', [QrController::class, 'index'])->name('qr-code.index');
    // Route::get('/create', [QrController::class, 'create'])->name('qr-code.create');
    // Route::post('/qr/generate', [QrController::class, 'generate'])->name('qr-code.generate');
    // Route::get('/qr/generate/{id}', [QrController::class, 'edit'])->name('qr-code.edit');
    // Route::put('/qr/generate/{id}', [QrController::class, 'update'])->name('qr-code.update');
    Route::get('/', [QrController::class, 'reader'])->name('qr-code.reader');
    Route::get('/scan/{code}', [ScanController::class, 'scan']);
    Route::post('/register-item', [ItemController::class, 'store'])->name('register-item');
});
// categories
// Route::prefix('categories')->group(function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/{item}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('/{item}', [CategoryController::class, 'update'])->name('categories.update');
// });

Route::get('scan/{rockId}',[QrController::class,'scan']);
Route::post('scan/{rockId}',[QrController::class,'store'])->name('scan.store'); 