<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ClienteController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TesteController::class. 'homePage']);

Route::get('/cadastrarCliente', [ClienteController::class, 'create']);
Route::post('/cadastrarCliente', [ClienteController::class, 'store']);
Route::get('/listarCliente',[ClienteController::class, 'index']);
Route::delete('/deletarCliente/{id}',[ClienteController::class, 'destroy']);