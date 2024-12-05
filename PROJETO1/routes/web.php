<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;


Route::get('cadastrarCliente', [Cliente::class,'create']);
Route::post('cadastrarCliente', [Cliente::class,'store']);
Route::get('listarCliente', [Cliente::class, 'index']);
Route::delete('deletarCliente/{id}', [Cliente::class, 'destroy']);
Route::get('editarCliente/{id}', [Cliente::class, 'edit']);
Route::get('/', [Cliente::class, 'index']);
Route::get('mostrarCliente/{id}', [Cliente::class, 'show']);
Route::resource('categorias', CategoriaController::class);
Route::get('/', function(){
    return view('login');
});
Route::get('google/redirect',[GoogleLoginController::class,'redirectToGoogle'])->name('google.redirect');
Route::get('google/callback',[GoogleLoginController::class,'handleGoogleCallback']);
Route::post('/logout',[GoogleLoginController::class, 'logout'])->name('logout');