<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

// Bikin routing ke halaman dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bikin routing ke halaman produk
Route::get('/produk', [ProdukController::class, 'index']);

// Bikin routing ke halaman depan home
Route::get('/home', [FrontendController::class, 'index']);

// Bikin routing ke halaman depan about
Route::get('/about', [FrontendController::class, 'about']);
