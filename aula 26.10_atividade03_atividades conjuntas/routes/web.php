<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteHController;

Route::get('/', [TesteHController::class,  'homePage']);

Route::get('/exercicio01', [TesteHController::class, 'exercicio01']);

Route::get('/exercicio02', [TesteHController::class, 'exercicio02']);

Route::get('/exercicio03', [TesteHController::class, 'exercicio03']);