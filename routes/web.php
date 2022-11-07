<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuemSomosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', [HomeController::class, 'index']);

// Quem Somos
Route::get('/quem-somos', [QuemSomosController::class, 'index']);

// Estoque
Route::get('/estoque', [EstoqueController::class, 'index']);

// Contato
Route::get('/contato', [ContatoController::class, 'index']);
