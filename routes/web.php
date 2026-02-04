<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ScanController;
 
    Route::get('/', [QrController::class, 'reader'])->name('qr-code.reader');
    Route::get('/scan/{code}', [ScanController::class, 'scan']);
    Route::post('/register-item', [ItemController::class, 'store'])->name('register-item');

Route::get('scan/{rockId}',[QrController::class,'scan']);
Route::post('scan/{rockId}',[QrController::class,'store'])->name('scan.store'); 