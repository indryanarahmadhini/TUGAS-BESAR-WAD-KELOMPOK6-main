<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\PenumpangController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rute/create', [RuteController::class, 'create'])->name('rute.create');
Route::post('/rute', [RuteController::class, 'store'])->name('rute.store');
Route::get('/rute/create', [RuteController::class, 'index']);
// Route untuk menampilkan formulir update
Route::get('/rute/{id}/edit', [RuteController::class, 'edit'])->name('rute.edit');
// Route untuk menangani permintaan update
Route::put('/rute/{id}', [RuteController::class, 'update'])->name('rute.update');
Route::delete('/rute/{id}', [RuteController::class, 'destroy'])->name('rute.destroy');

Route::get('/bus/create', [BusController::class, 'create'])->name('bus.create');
Route::post('/bus/store', [BusController::class, 'store'])->name('bus.store');
Route::get('/bus', [BusController::class, 'index'])->name('bus.index');
Route::delete('/bus/{id}', [BusController::class, 'destroy'])->name('bus.destroy');

Route::get('/supir/create', [SupirController::class, 'create'])->name('supir.create');
Route::post('/supir/store', [SupirController::class, 'store'])->name('supir.store');
Route::get('/supir/create', [SupirController::class, 'index']);
Route::get('/supir/{id}/edit', [SupirController::class, 'edit'])->name('supir.edit');
Route::put('/supir/{id}', [SupirController::class, 'update'])->name('supir.update');
Route::delete('/supir/{id}', [SupirController::class, 'destroy'])->name('supir.destroy');

// Menampilkan formulir create
Route::get('/penumpang/create', [PenumpangController::class, 'create'])->name('penumpang.create');

// Menyimpan data penumpang yang baru
Route::post('/penumpang', [PenumpangController::class, 'store'])->name('penumpang.store');

// Menampilkan daftar penumpang
Route::get('/penumpang/index', [PenumpangController::class, 'index'])->name('penumpang.index');
