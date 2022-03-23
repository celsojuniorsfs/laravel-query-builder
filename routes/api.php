<?php

use App\Http\Controllers\DefeitoController;
use Illuminate\Support\Facades\Route;

Route::get('cadastro-defeito', [DefeitoController::class, 'index']);
Route::get('cadastro-defeito/{codigo}', [DefeitoController::class, 'descricao']);
