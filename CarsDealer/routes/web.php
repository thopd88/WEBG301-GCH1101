<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\SuppliersController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', CarsController::class);
Route::resource('customers', CustomersController::class);
Route::resource('sales', SalesController::class);
Route::resource('parts', PartsController::class);
Route::resource('suppliers', SuppliersController::class);