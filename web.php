<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mobil2Controller;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\BeliCashController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('/mobil2', Mobil2Controller::class);
Route::resource('/pembeli', PembeliController::class);
Route::resource('/beli_cash', BeliCashController::class);
