<?php

use App\Http\Controllers\MatakuliahController;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.default');
});

// Route::get('/matakuliah', function () {
//     return view('matakuliah.index');
// });

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::resource('matakuliah', MatakuliahController::class);
