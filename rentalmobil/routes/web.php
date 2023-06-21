<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    echo "Selamat Datang di Laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/mobil', [MobilController::class, 'index']);
    Route::get('/mobil/create', [MobilController::class, 'create']); //memanggil form
    Route::post('/mobil/simpan-data', [MobilController::class, 'store']); //mengirim request
    Route::get('/mobil/edit/{id}', [MerkController::class, 'edit']);
    Route::get('/mobi/update/{id}', [MerkController::class, 'update']);
    Route::get('/mobil/delete/{id}', [MerkController::class, 'delete']);

    Route::get('/merk', [MerkController::class, 'index']);
    Route::get('/merk/create', [MerkController::class, 'create']);
    Route::post('/merk/simpan-data', [MerkController::class, 'store']);

    Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
    Route::post('/merk/update/{id}', [MerkController::class, 'update']);
    Route::get('/merk/delate/{id}', [MerkController::class, 'delete']);

    Route::get('/tipe_mobil', [MerkController::class, 'index']);
    Route::get('/tipe_mobil/create', [MerkController::class, 'create']);
    Route::post('/tipe_mobil/simpan-data', [MerkController::class, 'store']);

    Route::get('/tipe_mobil/edit/{id}', [MerkController::class, 'edit']);
    Route::post('/tipe_mobil/update/{id}', [MerkController::class, 'update']);
    Route::get('/tipe_mobil/delate/{id}', [MerkController::class, 'delate']);

    Route::get('/logout', [Auth\Logincontroller::class, 'Logout']);
});


//route untuk autentikasi dan registrasi
Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);
Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);