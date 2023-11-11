<?php

use App\Http\controllers\FormaPagoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\OrdenPedidoController;
use App\Http\Controllers\ProductoController;
use App\Models\Categoria;
use App\Models\OrdenPedido;
use App\Models\Producto;
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

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/categorias', CategoriaController::class);
 
Route::resource('/formaPago', FormaPagoController::class);

Route::resource('/ordenPedido', OrdenPedidoController::class);

Route::resource('/producto', ProductoController::class);