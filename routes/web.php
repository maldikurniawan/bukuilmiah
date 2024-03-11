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

Route::get('home', [DashboardController::class, 'index']);
Route::get('profile', [ProfileController::class, 'index']);

Route::resource('bukuajar', BukuAjarController::class);
Route::resource('bukureferensi', BukuReferensiController::class);
Route::resource('bukumonograf', BukuMonografController::class);
Route::resource('bookchapter', BookChapterController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
