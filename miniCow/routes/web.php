<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VaquinhaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('/vaquinha', VaquinhaController::class);
Route::resource('/usuarios', UsuariosController::class);


