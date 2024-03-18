<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DatosPromocionesController;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::post('/inicio', [DatosPromocionesController::class, 'store'])->name('inicio.store');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/register', [UsersController::class, 'listUsers'])->name('register');
    Route::get('/home', [DatosPromocionesController::class, 'listarDatosPromociones'])->name('home');
    Route::get('/home/export', [DatosPromocionesController::class, 'exportarTabla'])->name('exportar');
});
