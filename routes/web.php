<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\TyCController;

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
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('nosotros/contacto',                ContactoController::class);

Route::resource('proyectos',                        ProyectoController::class);

Route::resource('donaciones',                       DonacionController::class);

Route::resource('ayuda',                            AyudaController::class);

Route::resource('terminosycondiciones',             TyCController::class);


/* REDIRECCIONAR A INICIO DESPUES DE UNA RUTA DESCONOCIDA */
Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
/* REDIRECCIONAR A INICIO DESPUES DE UNA RUTA DESCONOCIDA */


