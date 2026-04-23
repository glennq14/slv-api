<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('xml/properties', [PropertyController::class,'index'])->name('feed');

require __DIR__.'/auth.php';
