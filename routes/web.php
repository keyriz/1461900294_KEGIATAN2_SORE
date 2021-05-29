<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SemesterController;

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

Route::get('/', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/absen', [AbsenController::class, 'index'])->name('absen');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/semester', [SemesterController::class, 'index'])->name('semester');
