<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
    Route::get('/profile', [UserController::class, 'profile'])->middleware('only_pegawai');
});