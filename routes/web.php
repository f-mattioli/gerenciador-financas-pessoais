<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposDespesaController;
use App\Http\Controllers\DespesasController;
use App\Http\Controllers\TiposRecebimentoController;
use App\Http\Controllers\RecebimentosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tipos-despesa', TiposDespesaController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('despesas', DespesasController::class);
Route::resource('recebimentos', RecebimentosController::class);
Route::resource('tipos-recebimento', TiposRecebimentoController::class);
