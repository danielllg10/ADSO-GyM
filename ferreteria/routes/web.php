<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/pag_productos', function () {
    return view('/other_views/pag_productos');
});
Route::get('/pag_dashboard', function () {
    return view('/other_views/pag_dashboard');
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
Route::get('/pag_dash_provee', function () {
    return view('/other_views\submenudashboar/pag_dash_provee');
});
Route::get('/pag_dash_productos', function () {
    return view('/other_views\submenudashboar/pag_dash_productos');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::controller(LoginRegisterController::class)->group(function(){

//     Route::get('/register','register')->name('register');
//     Route::post('/store','store')->name('store');
//     Route::get('/authenticate','authenticate')->name('authenticate');
//     Route::get('/logout','logout')->name('logout');
// });

