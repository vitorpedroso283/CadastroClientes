<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clientes.index');
});

// Rota para exibir a lista de clientes e o formulário de consulta/filtros
Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes.index');

// Rota para exibir o formulário de criação de cliente
Route::get('/clientes/create', function () {
    return view('clientes.create');
})->name('clientes.create');

// Rota para exibir o formulário de edição de cliente
Route::get('/clientes/{id}/edit', function ($id) {
    return view('clientes.edit', ['id' => $id]);
})->name('clientes.edit');

// Rota para exibir os detalhes de um cliente específico
Route::get('/clientes/{id}', function ($id) {
    return view('clientes.show', ['id' => $id]);
})->name('clientes.show');
