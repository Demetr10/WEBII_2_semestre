<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabuadaController;


Route::get('/', [TabuadaController::class, 'homePage']);

Route::get('/tabuada', [TabuadaController::class, 'tabuada']);