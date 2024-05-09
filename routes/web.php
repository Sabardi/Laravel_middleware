<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftarMahasiswa', [MahasiswaController::class, 'daftarMahasiswa']);
Route::get('/tabelMahasiswa', [MahasiswaController::class, 'tabelMahasiswa']);
Route::get('/blogMahasiswa', [MahasiswaController::class, 'blogMahasiswa']);
