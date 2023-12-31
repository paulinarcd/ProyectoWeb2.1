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
use App\Http\Controllers\login;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Middleware\Proteccion;

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
// Route::resource('/camisa', CamisaPersController::class );
// Route::resource('/cat', CategoriasController::class );

// Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
// Route::post('/categorias',[CategoriasController::class, 'store'])->name('categorias.store');
// Route::delete('/categorias/{id}',[CategoriasController::class, 'destroy'])->name('categorias.destroy');
// Route::put('/categorias/{id}',[CategoriasController::class, 'update'])->name('categorias.update');
// Route::get('/categorias/{id}',[CategoriasController::class, 'edit'])->name('categorias.edit');


// Route::get('/tallas',[TallasController::class,'index'])->name('tallas.index');
// Route::post('/tallas',[TallasController::class, 'store'])->name('tallas.store');
// Route::delete('/tallas/{id}',[TallasController::class, 'destroy'])->name('tallas.destroy');
// Route::put('/tallas/{id}',[TallasController::class, 'update'])->name('tallas.update');
// Route::get('/tallas/{id}',[TallasController::class, 'edit'])->name('tallas.edit');


// Route::get('/colores',[ColorsController::class,'index'])->name('colores.index');
// Route::post('/colores',[ColorsController::class, 'store'])->name('colores.store');
// Route::delete('/colores/{id}',[ColorsController::class, 'destroy'])->name('colores.destroy');
// Route::put('/colores/{id}',[ColorsController::class, 'update'])->name('colores.update');
// Route::get('/colores/{id}',[ColorsController::class, 'edit'])->name('colores.edit');


// Route::get('/productos',[ProductosController::class,'index'])->name('productos.index');
// Route::post('/productos',[ProductosController::class, 'store'])->name('productos.store');
// Route::delete('/productos/{id}',[ProductosController::class, 'destroy'])->name('productos.destroy');
// Route::put('/productos/{id}',[ProductosController::class, 'update'])->name('productos.update');
// Route::get('/productos/{id}',[ProductosController::class, 'edit'])->name('productos.edit');


// Route::get('/productosCT',[Producto_colortallasController::class,'index'])->name('productosCT.index');
// Route::post('/productosCT',[Producto_colortallasController::class, 'store'])->name('productosCT.store');
// Route::delete('/productosCT/{id}',[Producto_colortallasController::class, 'destroy'])->name('productosCT.destroy');
// Route::put('/productosCT/{id}',[Producto_colortallasController::class, 'update'])->name('productosCT.update');
// Route::get('/productosCT/{id}',[Producto_colortallasController::class, 'edit'])->name('productosCT.edit');

// Route::get('/usuarios',[UsersController::class,'index'])->name('usuarios.index');
// Route::post('/usuarios',[UsersController::class, 'store'])->name('usuarios.store');
// Route::delete('/usuarios/{id}',[UsersController::class, 'destroy'])->name('usuarios.destroy');
// Route::put('/usuarios/{id}',[UsersController::class, 'update'])->name('usuarios.update');
// Route::get('/usuarios/{id}',[UsersController::class, 'edit'])->name('usuarios.edit');



// Route::get('/personalizar',[CamisaPersController::class,'index'])->name('personalizar.index');
// Route::post('/personalizar',[CamisaPersController::class,'index'])->name('personalizar.store');

//  Route::get('/', function () {
//      return view('productos/visual');
//  });


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pdf', [ProductosController::class, 'generar_pdf'])->name('descargar-pdf');
Route::get('/excel', [ProductosController::class, 'generar_excel'])->name('descargar-excel');

Route::get('/verperfil', [UsersController::class, 'index2'])->name('verperfil.index2');
Route::get('/verperfilV', [ProductosController::class, 'index2'])->name('verperfilV.index2');
Route::get('/admin', [UsersController::class, 'indexAdmin'])->name('admin.indexAdmin');



// Route::middleware(['auth'])->group(function () {

// Route::middleware(['auth','proteccion:admin'])->group(function () {
     Route::get('/usuarios',[UsersController::class,'index'])->name('usuarios.index');
     Route::post('/usuarios',[UsersController::class, 'store'])->name('usuarios.store');
     Route::delete('/usuarios/{id}',[UsersController::class, 'destroy'])->name('usuarios.destroy');
     Route::put('/usuarios/{id}',[UsersController::class, 'update'])->name('usuarios.update');
     Route::get('/usuarios/{id}',[UsersController::class, 'edit'])->name('usuarios.edit');
// });

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


    Route::get('/productos',[ProductosController::class,'index'])->name('productos.index');
    Route::post('/productos',[ProductosController::class, 'store'])->name('productos.store');
    Route::delete('/productos/{id}',[ProductosController::class, 'destroy'])->name('productos.destroy');
    Route::put('/productos/{id}',[ProductosController::class, 'update'])->name('productos.update');
    Route::get('/productos/{id}',[ProductosController::class, 'edit'])->name('productos.edit');


    Route::get('/productosCT',[Producto_colortallasController::class,'index'])->name('productosCT.index');
    Route::post('/productosCT',[Producto_colortallasController::class, 'store'])->name('productosCT.store');
    Route::delete('/productosCT/{id}',[Producto_colortallasController::class, 'destroy'])->name('productosCT.destroy');
    Route::put('/productosCT/{id}',[Producto_colortallasController::class, 'update'])->name('productosCT.update');
    Route::get('/productosCT/{id}',[Producto_colortallasController::class, 'edit'])->name('productosCT.edit');

//     Route::get('/usuarios',[UsersController::class,'index'])->name('usuarios.index');
//     Route::post('/usuarios',[UsersController::class, 'store'])->name('usuarios.store');
//     Route::delete('/usuarios/{id}',[UsersController::class, 'destroy'])->name('usuarios.destroy');
//     Route::put('/usuarios/{id}',[UsersController::class, 'update'])->name('usuarios.update');
//     Route::get('/usuarios/{id}',[UsersController::class, 'edit'])->name('usuarios.edit');



    Route::get('/personalizar',[CamisaPersController::class,'index'])->name('personalizar.index');
    Route::post('/personalizar',[CamisaPersController::class,'index'])->name('personalizar.store');

   Route::get('/', function () {
        return view('productos/visual');
   });
// });