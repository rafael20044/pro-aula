<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

//Route::get('/saludar', [UsuariosController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/crear-user', [UsuariosController::class, 'store']);
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

Route::get('/saludar', [UsuariosController::class, 'index']);

});