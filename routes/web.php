<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/portifolio', function () {
    return view('portifolio');
})->name('portifolio');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');


