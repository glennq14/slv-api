<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PropertyController as V1PropertyController;
use App\Http\Controllers\Api\v1\UserController as V1UserController;
use App\Http\Controllers\Api\v1\PropertyTypeController as V1PropertyTypeController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1')->group( function () {
        Route::apiResource('properties', V1PropertyController::class);
        Route::apiResource('users', V1UserController::class);
        Route::apiResource('property-types', V1PropertyTypeController::class);
    });
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

require __DIR__.'/auth.php';