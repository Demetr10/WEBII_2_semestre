<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TesteController::class. 'homePage']);

Route::get('/cadastarCliente', [Cliente::class, 'create']);
Route::get('/cadastrarCliente', [Cliente::class, 'store']);
