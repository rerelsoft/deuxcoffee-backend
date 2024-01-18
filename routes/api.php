<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KaryawanController;


route::apiResource('/category', CategoryController::class);
route::apiResource('/jenis', JenisController::class);
route::apiResource('/stok', StokController::class);
route::apiResource('/meja', MejaController::class);
route::apiResource('/pelanggan', PelangganController::class);
route::apiResource('/menu', MenuController::class);
route::apiResource('/karyawan', KaryawanController::class);