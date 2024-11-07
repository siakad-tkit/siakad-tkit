<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard-tkit', function () {
    return view('dashboard-tkit');
})->middleware(['auth', 'verified'])->name('dashboard-tkit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/guru', \App\Http\Controllers\GuruController::class);
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

require __DIR__.'/auth.php';
