<?php

use App\Http\Controllers\Admin\TambahAbsensi\TambahAbsensiController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\Register\RegisterController;

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

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login-admin', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('doLogin');

    Route::get('/register-admin', [RegisterController::class, 'registerpage'])->name('register-page');
    Route::post('/register-admin', [RegisterController::class, 'register'])->name('register');


    Route::get('/tambah-absensi', [TambahAbsensiController::class, 'tambahAbsensiPage'])->name('tambah-absensi-page')
        ->middleware("auth:admin");
    Route::post('/tambah-absensi', [TambahAbsensiController::class, 'tambahAbsensi'])->name('tambah-absensi');
});

Route::get('/Dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
