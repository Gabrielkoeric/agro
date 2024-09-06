<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Autenticador;
use App\Http\Middleware\ControleAcesso;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AccessLogsController;
use App\Http\Controllers\GadoController;
use App\Http\Controllers\ConferenciagadoController;
use App\Http\Controllers\ManejogadoController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\SafraController;
use App\Http\Controllers\ManejolavouraController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TempolavouraController;
use App\Http\Controllers\ApiariosController;
use App\Http\Controllers\CaixasController;
use App\Http\Controllers\MelController;
use App\Http\Controllers\TempomelController;
use App\Http\Controllers\ManejomelController;
use App\Http\Controllers\TratorController;
use App\Http\Controllers\ImplementoController;
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

Route::get('/', function () {return view('welcome');})->name('home.index')->middleware(Autenticador::class);
//home
Route::get('/home', [HomeController::class, 'index'])->name('home.index')->middleware(Autenticador::class);
//usuarios
Route::resource('/usuario', UsuarioController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//perfis de usuarios
Route::resource('perfis_usuarios', PerfilController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//logs access
Route::resource('access_logs', AccessLogsController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//gado
Route::resource('/gado', GadoController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//conferencia gado
Route::resource('/conferencia_gado', ConferenciagadoController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//manejo gado
Route::resource('/manejo_gado', ManejogadoController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//areas
Route::resource('/areas', AreasController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//safra
Route::resource('/safra', SafraController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//manejo lavoura
Route::resource('/manejo_lavoura', ManejolavouraController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//produtos
Route::resource('/produtos', ProdutosController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//tempo lavoura
Route::resource('/tempo_lavoura', TempolavouraController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//apiarios
Route::resource('/apiarios', ApiariosController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//caixas
Route::resource('/caixas', CaixasController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//mel
Route::resource('/mel', MelController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//tempo mel
Route::resource('/tempo_mel', TempomelController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//manejo mel
Route::resource('/manejo_mel', ManejomelController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//trator
Route::resource('/trator', TratorController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);
//implemento
Route::resource('/implemento', ImplementoController::class)->middleware(Autenticador::class)->middleware(ControleAcesso::class);

//login google
//Route::get('login/google', "SocialiteController@redirectToProvider");
//Route::get('login/google/callback', 'SocialiteController@handleProviderCalback');
Route::get('login/google', [SocialiteController::class, 'redirectToProvider'])->name('login');
Route::get('login/google/callback', [SocialiteController::class, 'hendProviderCallback']);
Route::get('login/logout', [SocialiteController::class, 'destroy'])->name('logout');
Route::get('/forbidden', function () {return view('forbidden.index');});