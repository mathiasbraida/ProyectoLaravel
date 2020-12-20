<?php
use App\Insumos;
use App\Proveedores;
use App\Http\Controllers\EmpleadosController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
//Route::get('/empleados','EmpleadosController@index');
//Route::get('/empleados/create','EmpleadosController@create');

Route::resource('empleados','EmpleadosController')->middleware('autenticacion');
Route::resource('clientes','ClientesController');
Route::resource('proveedores','ProveedoresController');
Route::resource('insumos','InsumosController');
Route::resource('compras','ComprasController');
Route::resource('compras_productos','ComprasProductosController');
Route::resource('ventas','VentasController');