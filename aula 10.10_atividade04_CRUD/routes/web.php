<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;




Route::get('/', [ClienteController::class, 'index']);
Route::get('/cadastrarCliente', [ClienteController::class, 'create']);
Route::post('/cadastrarCliente', [ClienteController::class, 'store']);
Route::get('/listarCliente',[ClienteController::class, 'index']);
Route::delete('/deletarCliente/{id}',[ClienteController::class, 'destroy']);
Route::get('/editarCliente/{id}',[ClienteController::class, 'edit']);
Route::put('/editarCliente/{id}',[ClienteController::class, 'update']);

// Autenticação
