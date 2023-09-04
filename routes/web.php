<?php

use App\Http\Controllers\AddProductToInvoiceController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');

Route::resource('products', ProductsController::class)->only('index', 'store');

Route::resource('customers', CustomersController::class)->only('index', 'store');

Route::resource('orders', OrdersController::class)->only('index' , 'store');

Route::post('invoice/product', AddProductToInvoiceController::class)->name('invoice.product.store');
