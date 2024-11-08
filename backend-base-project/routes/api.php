<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Publicly accessible Routes for Rooms (no authentication required)
Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
Route::post('/rooms', [RoomController::class, 'store']);
Route::put('/rooms/{id}', [RoomController::class, 'update']);
Route::delete('/rooms/{id}', [RoomController::class, 'destroy']);

// Publicly accessible Routes for Guests (no authentication required)
Route::get('/guests', [GuestController::class, 'index']);
Route::get('/guests/{id}', [GuestController::class, 'show']);
Route::post('/guests', [GuestController::class, 'store']);
Route::put('/guests/{id}', [GuestController::class, 'update']);
Route::delete('/guests/{id}', [GuestController::class, 'destroy']);

Route::get('/test', function () {
    return response()->json(['message' => 'This is a test']);
});
