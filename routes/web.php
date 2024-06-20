<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dikerjakan', function () {
        return view('pages.dikerjakan');
    })->name('dikerjakan');

    Route::get('/history_pekerjaan', function () {
        return view('pages.history_pekerjaan');
    })->name('history_pekerjaan');

    Route::get('/pekerjaan_selesai', function () {
        return view('pages.pekerjaan_selesai');
    })->name('pekerjaan_selesai');

    Route::get('/hardware', function () {
        return view('pages.hardware');
    })->name('hardware');

    Route::get('/form-software', function () {
        return view('pages.software');
    })->name('software');

    Route::get('/permintaan_perbaikan', function () {
        return view('pages.permintaan_perbaikan');
    })->name('permintaan_perbaikan');

    Route::get('/form-perbaikan', function () {
        return view('pages.form-perbaikan');
    })->name('form-perbaikan');

    Route::get('/tindaklanjut_perbaikan', function () {
        return view('pages.tindaklanjut_perbaikan');
    })->name('tindaklanjut_perbaikan');

    Route::get('/form-tindaklanjut', function () {
        return view('pages.form-tindaklanjut');
    })->name('form-tindaklanjut');

    Route::get('/form-hardware', function () {
        return view('pages.form-hardware');
    })->name('form-hardware');
});

// Menggunakan RequestUserController untuk rute request-user
    Route::get('/request-user', [RequestUserController::class, 'create'])->name('request-user');
    Route::post('/request-user', [RequestUserController::class, 'store'])->name('request-user-simpan');

    Route::get('/permintaan-masuk', [RequestUserController::class, 'index'])->name('permintaan-masuk');

require __DIR__.'/auth.php';
