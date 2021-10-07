<?php

use App\Http\Controllers\Exercicios;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

    Auth::routes();

});

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');




//rota que redireciona para um controller

Route::prefix('/exercicio')->group(function()
{
    Route::get('/index', [Exercicios::class, 'index'])->name('exercicios.index');

    Route::get('/create', [Exercicios::class, 'create'])->name('exercicios.create');

    Route::post('/store', [Exercicios::class, 'store'])->name('exercicios.store');

    Route::get('/edit/{id}', [Exercicios::class, 'edit'])->name('exercicios.edit');

    Route::put('/update/{id}', [Exercicios::class, 'update'])->name('exercicios.update');

    Route::get('/show/{id}', [Exercicios::class, 'show'])->name('exercicios.show');

    Route::delete('/destroy/{id}', [Exercicios::class, 'destroy'])->name('exercicios.destroy');
});


Route::prefix('/ranking')->group(function()
{
    Route::get('/show', [Rankings::class, 'show'])->name('rankings.show');
});


Route::prefix('/perfil')->group(function()
{
    Route::get('/show', [Perfis::class, 'show'])->name('perfis.show');
});


Route::prefix('/sobre')->group(function()
{
    Route::get('/index', [Sobre::class, 'index'])->name('sobre.index');
});


Route::prefix('/contato')->group(function()
{
    Route::get('/index', [Contatos::class, 'index'])->name('Contatos.index');
});


Route::prefix('/premiacao')->group(function()
{
    Route::get('/index', [Premiacoes::class, 'index'])->name('premiacoes.index');
});
