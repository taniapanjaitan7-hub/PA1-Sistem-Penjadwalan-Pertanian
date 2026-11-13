<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LahanController;


// ==============================
// DASHBOARD
// ==============================

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


// ==============================
// ABOUT US
// ==============================

Route::get('/about', function () {
    return view('fitur', [
        'judul' => 'About Us'
    ]);
})->name('about');


// ==============================
// JADWAL PERTANIAN
// ==============================

Route::get('/jadwal', [JadwalController::class, 'index'])
    ->name('jadwal.index');

Route::post('/jadwal', [JadwalController::class, 'store'])
    ->name('jadwal.store');

Route::delete('/jadwal/{jadwal}', [JadwalController::class, 'destroy'])
    ->name('jadwal.destroy');


// ==============================
// DATA LAHAN
// ==============================

Route::get('/lahan', [LahanController::class, 'index'])
    ->name('lahan.index');

Route::post('/lahan', [LahanController::class, 'store'])
    ->name('lahan.store');

Route::put('/lahan/{lahan}', [LahanController::class, 'update'])
    ->name('lahan.update');

Route::delete('/lahan/{lahan}', [LahanController::class, 'destroy'])
    ->name('lahan.destroy');


// ==============================
// KRT
// ==============================

Route::get('/krt', function () {
    return view('fitur', [
        'judul' => 'Kelompok Rencana Tanam (KRT)'
    ]);
})->name('krt');


// ==============================
// TANAMAN
// ==============================

Route::get('/tanaman', function () {
    return view('fitur', [
        'judul' => 'Data Tanaman'
    ]);
})->name('tanaman');


// ==============================
// PENGELUARAN
// ==============================

Route::get('/pengeluaran', function () {
    return view('fitur', [
        'judul' => 'Pengeluaran Tanaman'
    ]);
})->name('pengeluaran');


// ==============================
// PENDAPATAN
// ==============================

Route::get('/pendapatan', function () {
    return view('fitur', [
        'judul' => 'Pendapatan Pertanian'
    ]);
})->name('pendapatan');


// ==============================
// LAPORAN PANEN
// ==============================

Route::get('/laporan-panen', function () {
    return view('fitur', [
        'judul' => 'Laporan Panen'
    ]);
})->name('panen');


// ==============================
// TUTORIAL PERAWATAN
// ==============================

Route::get('/tutorial', function () {
    return view('fitur', [
        'judul' => 'Tutorial Perawatan Tanaman'
    ]);
})->name('tutorial');


// ==============================
// ALAT DAN BAHAN
// ==============================

Route::get('/alat-bahan', function () {
    return view('fitur', [
        'judul' => 'Pengelolaan Alat dan Bahan'
    ]);
})->name('alat');