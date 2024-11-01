<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pinjamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\pengembalianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PublicController::class, 'index']);

Route::middleware(['auth', 'user-access:member'])->group(function () {
    Route::get('/profile', [PublicController::class, 'profil']);
    Route::get('/history', [PublicController::class, 'history']);
    Route::get('/pinjam/{id}' , [pinjamController::class, 'create']);
});


Route::get('/books', [PublicController::class, 'all']);
Route::get('/book/detail/{id}', [PublicController::class, 'show']);

Route::middleware(['auth', 'user-access:superadmin,admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/peminjaman', [peminjamanController::class, 'index']);
    Route::get('/peminjaman/cetak', [peminjamanController::class, 'cetak']);
    Route::get('/peminjaman/kembali/{id}', [peminjamanController::class, 'kembali']);
    Route::get('/pengembalian', [PengembalianController::class, 'index']);
    Route::get('/pengembalian/cetak', [PengembalianController::class, 'cetak']);
});

Route::get('login', [AuthController::class, 'index'])->name('login');;
Route::post('login/auth/', [AuthController::class, 'login']);
Route::get('register/', [AuthController::class, 'register']);
Route::post('register/create/', [AuthController::class, 'create']);
Route::get('logout/', [AuthController::class, 'logout']);