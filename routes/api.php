<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PropertiesController as V1PropertiesController;
use App\Http\Controllers\Api\v1\UsersController as V1UsersController;
use App\Http\Controllers\Api\v1\PropertyTypesController as V1PropertyTypesController;


Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1')->group( function () {
        Route::apiResource('properties', V1PropertiesController::class);
        Route::apiResource('users', V1UsersController::class);
        Route::apiResource('property-types', V1PropertyTypesController::class);
    });
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

require __DIR__.'/auth.php';