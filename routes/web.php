<?php

use App\Http\Controllers\ClienteController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RestauranteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//
Route::middleware(['auth'])->group(function () {
Route::resource('/clientes',ClienteController ::class);
Route::resource('/restaurante',RestauranteController::class);
Route::resource('/empleado', EmpleadoController::class);
});
Route::resource('/menu', MenuController::class);
