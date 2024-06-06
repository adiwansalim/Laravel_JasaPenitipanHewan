<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
Route::get('/loginuser', [LoginUserController::class, 'loginuser'])->name('loginuser');
Route::post('actionlogin1', [LoginUserController::class, 'actionlogin1'])->name('actionlogin1');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('process', [RegisterController::class, 'process'])->name('process');

Route::get('/pengguna',[PenggunaController::class, 'index'])->name('pengguna');
Route::get('/tambahpengguna', [PenggunaController::class, 'tambahpengguna'])->name('tambahpengguna');
Route::post('/insertdata', [PenggunaController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahpengguna/{id_pengguna}', [PenggunaController::class, 'ubahpengguna'])->name('ubahpengguna');
Route::post('/updatedata/{id_pengguna}', [PenggunaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletepengguna/{id_pengguna}', [PenggunaController::class, 'deletepengguna'])->name('deletepengguna');
Route::get('/eksporpengguna', [PenggunaController::class, 'eksporpengguna'])->name('eksporpengguna');
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan');
Route::get('/tambahhewan', [HewanController::class, 'tambahhewan'])->name('tambahhewan');
Route::post('/insertdata1', [HewanController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahhewan/{id_hewan}', [HewanController::class, 'ubahhewan'])->name('ubahhewan');
Route::post('/updatedata1/{id_hewan}', [HewanController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deletehewan/{id_hewan}', [HewanController::class, 'deletehewan'])->name('deletehewan');
Route::get('/eksporhewan', [HewanController::class, 'eksporhewan'])->name('eksporhewan');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi'])->name('tambahtransaksi');
Route::post('/insertdata2', [TransaksiController::class, 'insertdata2'])->name('insertdata2');
Route::get('/ubahtransaksi/{id_transaksi}', [TransaksiController::class, 'ubahtransaksi'])->name('ubahtransaksi');
Route::post('/updatedata2/{id_transaksi}', [TransaksiController::class, 'updatedata2'])->name('updatedata2');
Route::get('/deletetransaksi/{id_transaksi}', [TransaksiController::class, 'deletetransaksi'])->name('deletetransaksi');
Route::get('/eksportransaksi', [TransaksiController::class, 'eksportransaksi'])->name('eksportransaksi');
