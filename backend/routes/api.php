<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/crear-user', [UsuariosController::class, 'store']);
Route::get('/buscar-user/{id}', [UsuariosController::class, 'show']);