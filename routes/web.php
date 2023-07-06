<?php

use App\Http\Controllers\GestionarUsuario\CargoController;
use App\Http\Controllers\GestionarUsuario\LoginController;
use App\Http\Controllers\GestionarUsuario\LogoutController;
use App\Http\Controllers\GestionarUsuario\PersonalController;
use App\Http\Controllers\GestionarUsuario\PropietarioController;
use App\Http\Controllers\GestionarUsuario\UsuarioController;
use App\Http\Controllers\GestionarUsuario\RolController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->middleware('auth');

Route::view('login', 'gestion_usuarios.login')->name('login')->middleware('guest');
Route::post('login', LoginController::class); //->name('login');
Route::post('logout', LogoutController::class)->name('logout');

Route::resource('/propietarios', PropietarioController::class)->except('show');
Route::resource('/cargos', CargoController::class)->except('show');
Route::resource('/personal', PersonalController::class)->except('show');
Route::resource('/usuarios', UsuarioController::class)->except('show');
Route::resource('/roles', RolController::class, ['parameters' => ['roles' => 'rol']]);
