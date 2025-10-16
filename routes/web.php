<?php

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/matakuliah', function () {
//     return view('matakuliah.index');
// });

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
