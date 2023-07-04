<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudProveedoresController;
use App\Http\Controllers\CrudventasController;
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

//Rutas de cada una de las vostas del dashboar como pagina de productos,pago,dashboar y entre otras mas 
Route::get('/', function () {
    return view('index');
});
Route::get('/pag_productos', function () {
    return view('/other_views/pag_productos');
});

Route::get('/pag_error404', function () {
    return view('/other_views/pag_error404');
});
Route::get('/pag_error500', function () {
    return view('/other_views/pag_error500');
});
Route::get('/pag_pagar', function () {
    return view('/other_views/pag_pagar');
});
Route::get('/pag_registro', function () {
    return view('/other_views/pag_registro');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/pag_dash_productos', ProductoController::class);
    Route::resource('/pag_dash_provee', CrudProveedoresController::class);
    Route::resource('/pag_dash_ventas', CrudventasController::class);
    Route::get('/pag_dash_ventas/pdf', [App\Http\Controllers\CrudventasController::class, 'pdf']);
    Route::get('/pag_dash_provee/pdf', [App\Http\Controllers\CrudProveedoresController::class, 'pdf']);
    Route::get('/pag_dash_productos/pdf', [App\Http\Controllers\ProductoController::class, 'pdf']);
});


//fin de la explicacion de esta ruta :)

/////////////////////////////////////////////////////////////////////////////////////////////////////


Auth::routes();

//fin de la explicacion de esta ruta :)

/////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////

//crear las funciones para los enlaces para poder generar los pdf de cada uno de los cruds

// Route::get('/pag_dash_ventas/pdf', [App\Http\Controllers\CrudventasController::class, 'pdf']);
// Route::get('/pag_dash_provee/pdf', [App\Http\Controllers\CrudProveedoresController::class, 'pdf']);
// Route::get('/pag_dash_productos/pdf', [App\Http\Controllers\ProductoController::class, 'pdf']);

//fin de la explicacion de esta ruta :)

/////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////

//Creamos controladores,modelos y migraciones con sus funciones para poder darle los distintos funcionamientos al dashboar

// Route::resource('/pag_dash_productos', ProductoController::class);
// Route::resource('/pag_dash_provee', CrudProveedoresController::class);

// Route::resource('/pag_dash_ventas', CrudventasController::class);

//fin de la explicacion de esta ruta :)
/////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
