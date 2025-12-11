<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', [RoomController::class, 'index'])->name('home');

// Route untuk Room
Route::resource('rooms', RoomController::class);