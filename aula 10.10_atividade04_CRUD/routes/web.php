<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TesteController::class, 'homePage']);
Route::get('/cadastrarCliente', [ClienteController::class, 'create']);
Route::post('/cadastrarCliente', [ClienteController::class, 'store']);
Route::get('/listarCliente',[ClienteController::class, 'index']);
Route::delete('/deletarCliente/{id}',[ClienteController::class, 'destroy']);

// Autenticação
Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
