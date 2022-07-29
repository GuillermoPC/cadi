<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\TyCController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\BlogController;

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


//AUTORIZACIÓN
Auth::routes();

Route::get('/', function () {
    return view('inicio');
});

//ADMINISTRACIÓN RUTAS
Route::resource('administracion',                  AdministracionController::class)->middleware('auth');

//VISTAS PRINCIPALES

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('nosotros/contacto',                ContactoController::class);

Route::resource('proyectos',                        ProyectoController::class);

Route::resource('donaciones',                       DonacionController::class);

Route::resource('ayuda',                            AyudaController::class);

Route::resource('terminosycondiciones',             TyCController::class);

Route::resource('nino',                             KidController::class);
Route::get('/nino/edit/{id}',                       [KidController::class, 'getKidById']);
Route::post('nino/delete',                          [KidController::class,'delete'])->name('nino.delete');
Route::get('StatusNino',                            [KidController::class,'UpdateStatusNino'])->name('UpdateStatusNino');

Route::resource('blog',                             BlogController::class);
Route::get('/blog/edit/{id}',                       [BlogController::class, 'getBlogById']);
Route::post('blog/delete',                          [BlogController::class, 'delete'])->name('blog.delete');
Route::get('StatusBlog',                            [BlogController::class, 'UpdateStatusBlog'])->name('UpdateStatusBlog');

/* STRIPE DONACIONES */

Route::post('/checkout', [PaymentController::class, 'paymentPost'])->name('payment.post');

/* STRIPE DONACIONES */

/* REDIRECCIONAR A INICIO DESPUES DE UNA RUTA DESCONOCIDA */
Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
/* REDIRECCIONAR A INICIO DESPUES DE UNA RUTA DESCONOCIDA */


