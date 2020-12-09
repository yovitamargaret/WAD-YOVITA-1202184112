<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;

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
//Route::resource('products', ProductController::class);

Route::get('/', function () {
  return view('welcome');

});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::post('products', ProductController::class);
Route::post('order', OrderController::class);
Route::view('/order-form', 'orders/create');
Route::post('history', HistoryController::class);
