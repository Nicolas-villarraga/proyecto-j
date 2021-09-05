<?php


use App\Http\Controllers\CitaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HistoriaclinicaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipodocumentoController;
use App\Models\Proceso;

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
Route::resource('detalles',DetalleController::class);
Route::resource('tipodocumentos',TipodocumentoController::class);
Route::resource('rols',RolController::class);
Route::resource('estados',EstadoController::class);
Route::resource('generos',GeneroController::class);
Route::resource('usuarios',UsuarioController::class);
Route::resource('pacientes',PacienteController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('especialidads',EspecialidadController::class);
Route::resource('historiaclinicas',HistoriaclinicaController::class);
Route::resource('pedidos',PedidoController::class);
Route::resource('productos',ProductoController::class);
Route::resource('proveedors',ProveedorController::class);
Route::resource('procesos',ProcesoController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
