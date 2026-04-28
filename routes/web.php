<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::view('/login', 'welcome');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('xml/properties', [PropertyController::class,'index'])->name('feed');

require __DIR__.'/auth.php';
