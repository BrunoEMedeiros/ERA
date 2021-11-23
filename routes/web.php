<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RankingsController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PremiacaoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');

    Auth::routes();

});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/exercicios')->group(function()
{
    Route::get('/', [ExerciciosController::class, 'index'])->name('exercicios');

    Route::get('/create', [ExerciciosController::class, 'create'])->name('exercicios.create');

    Route::post('/store', [ExerciciosController::class, 'store'])->name('exercicios.store');

    Route::get('/edit/{id}', [ExerciciosController::class, 'edit'])->name('exercicios.edit');

    Route::put('/update/{id}', [ExerciciosController::class, 'update'])->name('exercicios.update');

    Route::get('/show/{id}', [ExerciciosController::class, 'show'])->name('exercicios.show');

    Route::delete('/destroy/{id}', [ExerciciosController::class, 'delete'])->name('exercicios.delete');

});

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');

Route::get('/ranking', [RankingsController::class, 'index'])->name('ranking');

Route::get('/premiacao', function () {
    return view('premiacao');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/perfil', function () {
    return view('perfil');
});





