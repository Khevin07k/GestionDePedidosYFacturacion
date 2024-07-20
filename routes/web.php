<?php

//use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [PrincipalController::class, 'index']);
Route::get('/usuario', [UserController::class, 'index']);
Route::get('/perfil', [PerfilController::class, 'index']);

