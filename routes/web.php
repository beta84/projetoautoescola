<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadInstrutoresController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', HomeController::class)->name('home'); 
Route::post('painel', [UsuarioController::class, 'login'])->name('usuarios.login'); // rotas tela de login
Route::get('instrutores', [CadInstrutoresController::class, 'index'])->name('instrutores.index'); // rotas tela de instrutores
Route::get('home-admin', [AdminController::class, 'index'])->name('admin.index'); // rotas tela de instrutores
Route::post('/', [UsuarioController::class, 'logout'])->name('usuarios.logout'); // rotas tela de sair




