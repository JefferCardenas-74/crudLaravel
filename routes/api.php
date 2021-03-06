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

Route::get('/test', function(){
    return "test";
});
Route::get('/all', '\App\Http\Controllers\ProductController@index');
Route::post("/save", '\App\Http\Controllers\ProductController@store');
Route::put("/update/{id}", '\App\Http\Controllers\ProductController@update');
