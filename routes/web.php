<?php

use App\Http\Controllers\MatakuliahController;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/matakuliah', function () {
//     return view('matakuliah.index');
// });

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});

Route::get('/dosen', function () {
    return view('dosen.index');
});
