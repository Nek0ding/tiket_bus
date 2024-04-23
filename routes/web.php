<?php

use App\Http\Controllers\hasilController;
use App\Http\Controllers\pemesananController;
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
Route::get('/', fn () => redirect()->route('pesan.index'));
Route::resource('/pesan', pemesananController::class);
Route::resource('/hasil-pesanan', hasilController::class);
