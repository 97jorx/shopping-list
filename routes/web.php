<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\ProductListController;
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
    return redirect('lists/index');
})->name('home');

Route::controller(ProductController::class)->group(function() {

    // TODOS LOS PRODUCTOS
    Route::get('products/index', 'index')->name('products.index');

    // CREACIÓN DEL PRODUCTO
    Route::get('products/create', 'create')->name('products.create');
    Route::post('products', 'store')->name('products.store');

    // ACTUALIZACIÓN DEL PRODUCTO
    Route::get('products/edit/{product}', 'edit')->name('products.edit');
    Route::put('products/{product}', 'update')->name('products.update');

    // BORRADO DEL PRODUCTO
    Route::delete('products/{product}', 'delete')->name('products.delete');

    // DETALLES DEL PRODUCTO
    Route::get('products/show/{product}', 'show')->name('products.show');

    //SEARCH DEL PRODUCTO
    Route::post('/product/search', 'search')->name('product.search');


});

Route::controller(ShoppingListController::class)->group(function() {

    // TODAS LAS LISTAS
    Route::get('lists/index', 'index')->name('lists.index');

    // CREACIÓN DE LA LISTA
    Route::get('lists/create', 'create')->name('lists.create');
    Route::post('lists', 'store')->name('lists.store');
    
    // VISTA DE LA LISTA
    Route::get('lists/view/{id}', 'view')->name('lists.view');

    // BORRADO DE LA LISTA
    Route::delete('lists', 'delete')->name('lists.delete');


});

Route::controller(ProductListController::class)->group(function() {

    // BORRADO DE LA LISTA
    Route::post('productlist/additem', 'additem')->name('productlist.additem');
    Route::post('productlist/edit', 'edit')->name('productlist.edit');


});

