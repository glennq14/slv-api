<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Pest\Plugins\Profile;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

// Route::view('login',   'auth.login')->name('login');
Route::get('login', [LoginController::class, 'formLogin'])->name('login');
Route::post('login', [LoginController::class, 'webLogin']);

Route::get('xml/properties', [PropertyController::class,'index'])->name('feed');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::resource('profile', ProfileController::class);
    Route::get('profile/edit',[ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile/update',[ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile/delete',[ProfileController::class,'destroy'])->name('profile.destroy');

    // Route::get('/logout', function (Request $request) {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // })->name('logout');
});

require __DIR__.'/auth.php';
