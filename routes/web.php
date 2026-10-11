<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

// Route ke controller methods
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
 ->middleware('log.request');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
Route::get('/mahasiswa/create/form', [MahasiswaController::class, 'create']);

Route::post('/mahasiswa', function (Request $request) {
    // Untuk sementara, hanya menampilkan data yang dikirim
    return response()->json([
        'message' => 'Data mahasiswa berhasil diterima',
        'data' => [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
        ]
    ]);
});
