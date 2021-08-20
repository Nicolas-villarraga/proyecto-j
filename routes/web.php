<?php

use App\Http\Controllers\AcudienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DetalleproductoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipodocumentoController;
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
Route::get('/', function () {
    return view('auth.login');
});

Route::resource('citas',CitaController::class);
Route::resource('detalleproductos', DetalleproductoController::class);
Route::resource('tipodocumentos',TipodocumentoController::class);
Route::resource('rols',RolController::class);
Route::resource('estados',EstadoController::class);
Route::resource('acudientes',AcudienteController::class);
Route::resource('generos',GeneroController::class);
Route::resource('usuarios',UsuarioController::class);
Route::resource('pacientes',PacienteController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('productos', ProductoController::class);
