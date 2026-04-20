<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\PropertyController as V1PropertyController;
use App\Http\Controllers\api\v1\UserController as V1UserController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1')->group( function () {
        Route::apiResource('properties', V1PropertyController::class);
        Route::apiResource('users', V1UserController::class);
    });
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::prefix('v1')->group( function () {
//     Route::apiResource('properties', V1PropertyController::class);
// });