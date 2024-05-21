<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;

// Main dashboard route
Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

// User management routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Device management routes
Route::prefix('devices')->group(function () {
    Route::get('/', [DeviceController::class, 'index'])->name('devices.index');
    Route::get('/create', [DeviceController::class, 'create'])->name('devices.create');
    Route::post('/', [DeviceController::class, 'store'])->name('devices.store');
    Route::get('/{id}/edit', [DeviceController::class, 'edit'])->name('devices.edit');
    Route::put('/{id}', [DeviceController::class, 'update'])->name('devices.update');
    Route::delete('/{id}', [DeviceController::class, 'destroy'])->name('devices.destroy');
});
