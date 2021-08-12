<?php

use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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
Route::resource('productos', ProductoController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

