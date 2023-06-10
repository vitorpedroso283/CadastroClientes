<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Rota para listar todos os clientes
Route::get('/clientes', [ClienteController::class, 'index']);

// Rota para criar um novo cliente
Route::post('/clientes', [ClienteController::class, 'store']);

// Rota para exibir um cliente específico
Route::get('/clientes/{id}', [ClienteController::class, 'show']);

// Rota para atualizar um cliente existente
Route::put('/clientes/{id}', [ClienteController::class, 'update']);

// Rota para excluir um cliente
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
