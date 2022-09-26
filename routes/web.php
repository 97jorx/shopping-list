<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingListController;
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
    return view('home');
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

});

Route::controller(ShoppingListController::class)->group(function() {
    Route::get('lists/index', 'index')->name('lists.index');
    Route::get('lists/create', 'create')->name('lists.create');
});

