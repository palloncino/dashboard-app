<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/users', [PageController::class, 'users'])->name('users');
Route::get('/dashboard/devices', [PageController::class, 'devices'])->name('devices');
