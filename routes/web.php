<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

//Laravel 8 (New) - best
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);

//Laravel 8 (Also new)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before laravel 8
//Route::get('/products', 'ProductsController@index');
