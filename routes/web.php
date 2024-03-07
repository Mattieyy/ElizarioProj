<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => ['guest', 'auth']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');


    Route::group(['prefix' => 'portals', 'middleware' => ['auth']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/users', [DashboardController::class, 'users'])->name('users');
        Route::get('/loans', [DashboardController::class, 'loans'])->name('loans');
        Route::get('/loantypes', [DashboardController::class, 'loantypes'])->name('loantypes');
        Route::get('/loanplans', [DashboardController::class, 'loanplans'])->name('loanplans');
        Route::get('/borrowers', [DashboardController::class, 'borrowers'])->name('borrowers');
        Route::get('/payment', [DashboardController::class, 'payment'])->name('payment');
});
});
