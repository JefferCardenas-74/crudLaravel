<?php

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
    return view('index');
});

Route::get('/all', '\App\Http\Controllers\ProductController@index');
Route::post("/save", '\App\Http\Controllers\ProductController@store');
Route::put("/update/{id}", '\App\Http\Controllers\ProductController@update');
Route::delete("/delete/{id}", '\App\Http\Controllers\ProductController@destroy');
Route::get("/find/{id}", '\App\Http\Controllers\ProductController@show');

