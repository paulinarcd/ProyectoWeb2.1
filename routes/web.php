<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisaPersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\Historial_comprasController;
use App\Http\Controllers\Producto_colortallasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TallasController;
use Illuminate\Support\Facades\Auth;


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
Route::resource('/camisa', CamisaPersController::class );
Route::resource('/cat', CategoriasController::class );

Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
Route::post('/categorias',[CategoriasController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{id}',[CategoriasController::class, 'destroy'])->name('categorias.destroy');
Route::put('/categorias/{id}',[CategoriasController::class, 'update'])->name('categorias.update');
Route::get('/categorias/{id}',[CategoriasController::class, 'edit'])->name('categorias.edit');


Route::get('/tallas',[TallasController::class,'index'])->name('tallas.index');
Route::post('/tallas',[TallasController::class, 'store'])->name('tallas.store');
Route::delete('/tallas/{id}',[TallasController::class, 'destroy'])->name('tallas.destroy');
Route::put('/tallas/{id}',[TallasController::class, 'update'])->name('tallas.update');
Route::get('/tallas/{id}',[TallasController::class, 'edit'])->name('tallas.edit');


Route::get('/colores',[ColorsController::class,'index'])->name('colores.index');
Route::post('/colores',[ColorsController::class, 'store'])->name('colores.store');
Route::delete('/colores/{id}',[ColorsController::class, 'destroy'])->name('colores.destroy');
Route::put('/colores/{id}',[ColorsController::class, 'update'])->name('colores.update');
Route::get('/colores/{id}',[ColorsController::class, 'edit'])->name('colores.edit');


 Route::get('/', function () {
     return view('productos/visual');
 });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
