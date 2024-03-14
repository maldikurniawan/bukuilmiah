<?php

use App\Http\Controllers\BookChapterController;
use App\Http\Controllers\BukuAjarController;
use App\Http\Controllers\BukuMonografController;
use App\Http\Controllers\BukuReferensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [DashboardController::class, 'index']);
    Route::resource('profile', ProfileController::class);

    Route::resource('bukuajar', BukuAjarController::class);
    Route::get('/bukuajar/{id}/acc', [BukuAjarController::class, 'acc']);
    Route::get('/bukuajar/{id}/waiting', [BukuAjarController::class, 'waiting']);

    Route::resource('bukureferensi', BukuReferensiController::class);
    Route::get('/bukureferensi/{id}/acc', [BukuReferensiController::class, 'acc']);
    Route::get('/bukureferensi/{id}/waiting', [BukuReferensiController::class, 'waiting']);

    Route::resource('bukumonograf', BukuMonografController::class);
    Route::get('/bukumonograf/{id}/acc', [BukuMonografController::class, 'acc']);
    Route::get('/bukumonograf/{id}/waiting', [BukuMonografController::class, 'waiting']);

    Route::resource('bookchapter', BookChapterController::class);
    Route::get('/bookchapter/{id}/acc', [BookChapterController::class, 'acc']);
    Route::get('/bookchapter/{id}/waiting', [BookChapterController::class, 'waiting']);
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
