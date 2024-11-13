<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
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
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');

Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');


require __DIR__.'/auth.php';
