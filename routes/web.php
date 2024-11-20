<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AkademikController;
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

Route::resource('/kelas', \App\Http\Controllers\KelasController::class);
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::post('kelas/index/kelasStore', [KelasController::class, 'store'])->name('kelas.store');
Route::get('kelas/index/kelasEdit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::delete('kelas/index/kelasDelete/{id}', [KelasController::class, 'destroy']);
Route::put('kelas/index/kelasUpdate/{id}', [KelasController::class, 'update']);

Route::resource('/akademik', \App\Http\Controllers\AkademikController::class);
Route::get('/akademik', [AkademikController::class, 'index'])->name('akademik.index');

require __DIR__.'/auth.php';
