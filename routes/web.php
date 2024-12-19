<?php

use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ServisController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SupervisorMiddleware;

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->middleware(AdminMiddleware::class);;
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->middleware(AdminMiddleware::class);;
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->middleware(AdminMiddleware::class);;
Route::put('/kendaraan/update/{id}', [KendaraanController::class, 'update'])->middleware(AdminMiddleware::class);;

Route::get('/admin/pesan/{idkendaraan}', [PemesananController::class, 'create'])->middleware(AdminMiddleware::class);
Route::post('/admin/store/', [PemesananController::class, 'store'])->middleware(AdminMiddleware::class);
Route::get('/admin/pemesanan', [PemesananController::class, 'show'])->middleware(AdminMiddleware::class);
Route::get('/admin', [PemesananController::class, 'index'])->middleware(AdminMiddleware::class);
Route::get('/admin/proses', [PemesananController::class, 'getApprovedAdmin'])->middleware(AdminMiddleware::class);
Route::get('/dipesan/{id}', [PemesananController::class, 'prosesPesanan'])->middleware(AdminMiddleware::class);
Route::get('/admin/servis', [ServisController::class, 'index'])->middleware(AdminMiddleware::class);
Route::get('/admin/buat-servis/{id}', [ServisController::class, 'create'])->middleware(AdminMiddleware::class);
Route::post('/servis/store/', [ServisController::class, 'store'])->middleware(AdminMiddleware::class);

Route::get('/servis_selesai/{id}', [ServisController::class, 'selesai'])->middleware(AdminMiddleware::class);

Route::get('/supervisor', [SupervisorController::class, 'getPemesananBySupervisor'])->middleware(SupervisorMiddleware::class);
Route::get('/konfirm/{id}', [SupervisorController::class, 'konfirmSupervisor'])->middleware(SupervisorMiddleware::class);
Route::get('/tolak/{id}', [SupervisorController::class, 'tolakSupervisor'])->middleware(SupervisorMiddleware::class);
Route::get('/pemesanan-export', [PemesananController::class, 'export'])->middleware(AdminMiddleware::class);




Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
