<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

//buat routing salam
Route::get('/salam', function () {
    return "Halo Semua";
});

// Buat Routing Kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat Routing Nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Buat Routing Pasien
Route::get('/pasien', function () {
    return view('pasien');
});

// Buat routing form pake controller
Route::get('/form', [FormController::class, 'index']);

// Buat routing hasil form pake controller
Route::post('/hasil', [FormController::class, 'hasil']);

// Buat routing skill pake controller
Route::get('/skill', [SkillController::class, 'index']);

// Buat routing hasil skill pake controller
Route::post('/skillhasil', [SkillController::class, 'hasil']);