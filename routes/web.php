<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke mahasiswa
Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

// Resource route untuk CRUD Mahasiswa
// Otomatis membuat: index, create, store, show, edit, update, destroy
Route::resource('mahasiswa', MahasiswaController::class);
