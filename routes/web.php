<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// rota da página de compra
Route::get('/comprar', function () {
    return "Página de compra (simulação)";
})->name('comprar');

// rota da página de produtos
Route::get('/produtos', function () {
    return "Página de produtos";
})->name('produtos');

// rota da página de contato
Route::get('/contato', function () {
    return "Página de contato";
})->name('contato');

