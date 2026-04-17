<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return view('tes');
});
 
Route::get('/bjir', function () {
    return 'TES WELL AHHHHHH';
});

Route::get('/user/{id}', function ($id) {
    return "Profile User dengan ID:" . $id;
});

Route::get('/produk/{slug?}', function ($slug = 'semua-produk') {
    return "Menampilkan: " . $slug;
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/tes', [MahasiswaController::class, 'tes']);