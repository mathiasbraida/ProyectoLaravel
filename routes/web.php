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
Route::get('empleados_list_pdf', 'EmpleadosController@exportPdf')->name('empleados.pdf');
Route::get('ventas_list_pdf', 'VentasController@exportPdf')->name('ventas.pdf');
Route::get('compras_list_pdf', 'ComprasController@exportPdf')->name('compras.pdf');
Route::resource('empleados','EmpleadosController')->middleware('autenticacion');
Route::resource('clientes','ClientesController')->middleware('autenticacion');
Route::resource('proveedores','ProveedoresController')->middleware('autenticacion');
Route::resource('insumos','InsumosController')->middleware('autenticacion');
Route::resource('compras','ComprasController')->middleware('autenticacion');
//Route::resource('compras_productos','ComprasProductosController');
Route::resource('ventas','VentasController')->middleware('autenticacion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
