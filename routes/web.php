<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlternatifController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate'])->name('log_in')->middleware('guest');

Route::middleware(['auth'])->group(function () {

    Route::post('/logout',[LoginController::class, 'log_out'])->name('log_out');
    Route::get('/home',[DashboardController::class,'index'])->name('home');

    Route::get('/alternatif',[AlternatifController::class,'index'])->name('alternatif');

});
