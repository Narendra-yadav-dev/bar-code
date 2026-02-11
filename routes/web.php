<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;


Route::prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        // login
        Route::get('/',[AuthController::class,'login'])->name('login');
        Route::post('/login',[AuthController::class,'loginPost'])->name('auth.login');
    });
    // dashboard
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashbaord');
        Route::get('/change-password', [DashboardController::class, 'changePassword'])
            ->name('change-password');
        Route::post('/change-password', [DashboardController::class, 'changePasswordPost'])
            ->name('change-password-post');

        Route::get('/log-out', [AuthController::class, 'logout'])
            ->name('auth.logout');
    });
    Route::prefix('qr-code')->group(function () {
        Route::get('/', [QrController::class, 'index'])->name('qr-code.index');
        Route::get('/create', [QrController::class, 'create'])->name('qr-code.create');
        Route::post('/qr/generate', [QrController::class, 'generate'])->name('qr-code.generate');
        Route::get('/qr/generate/{id}', [QrController::class, 'edit'])->name('qr-code.edit');
        Route::put('/qr/generate/{id}', [QrController::class, 'update'])->name('qr-code.update');
        Route::post('/print', [QrController::class, 'print'])->name('qr-code.print');
        Route::post('/export', [QrController::class, 'export'])->name('qr-code.export');
    });
    // categories
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{item}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{item}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/{item}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    });
});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/reader', [HomeController::class, 'reader'])->name('reader');
Route::get('/scan/{rockId}', [HomeController::class, 'scan']);
Route::post('/scan/{rockId}', [HomeController::class, 'store'])->name('scan.store');
Route::post('/register-item', [HomeController::class, 'store'])->name('register-item');