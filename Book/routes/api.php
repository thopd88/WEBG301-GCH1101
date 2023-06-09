<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/books', 'App\Http\Controllers\Api\V1\BookController@index');
// Route::get('/books/{id}', 'App\Http\Controllers\Api\V1\BookController@show');

// Route::delete('/books/{id}', 'App\Http\Controllers\Api\V1\BookController@destroy');
// Route::post('/books', 'App\Http\Controllers\Api\V1\BookController@create');
// Route::put('/books/{id}', 'App\Http\Controllers\Api\V1\BookController@update');

Route::apiResource('books', 'App\Http\Controllers\Api\V1\BookController');