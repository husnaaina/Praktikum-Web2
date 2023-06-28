<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Bikin routing tampilan awal
Route::get('/', [TampilanController::class, 'index']);

// Biki Routing buat amananin data
Route::group(['middleware' => ['auth']], function () {
    // bikin routing after regist
    Route::get('/after_register', function () {
        return view('after_register');
    });

    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {

 // Bikin routing ke halaman dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bikin routing ke halaman produk
Route::get('/produk', [ProdukController::class, 'index']);

// Bikin routing ke halaman depan home
Route::get('/home', [FrontendController::class, 'index']);

// Bikin routing ke halaman depan about
Route::get('/about', [FrontendController::class, 'about']);

// Bikin routing ke halaman form tambah data
Route::get('/produk/create', [ProdukController::class, 'create']);

// Bikin routing ke halaman fungsi store
Route::post('/produk/store', [ProdukController::class, 'store']);

// Bikin routing ke halaman form edit
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);

// Bikin Routing untuk validasi data edit update
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

// Buat routing untuk delete data
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
});

Route::get('/tampilan', [TampilanController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
