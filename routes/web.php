<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdotaController;
use App\Http\Controllers\AjudaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EntraController;
use App\Http\Controllers\UsuarioController;



Route::get('/',[HomeController::class, 'index']);
Route::get('/quero-adotar', [AdotaController::class, 'adota']);
Route::get('/quero-ajudar', [AjudaController::class, 'ajuda']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/entrar', [EntraController::class, 'entrar']);
Route::get('/cadastre-se', [UsuarioController::class, 'cadastra']);
Route::post('/usuario', [UsuarioController::class, 'store']);

