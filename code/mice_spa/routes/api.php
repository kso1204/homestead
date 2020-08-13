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

Route::namespace('Api')->group(function(){

    
    Route::post('/login', 'LoginController@login');


    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user}', 'UsersController@show');
    Route::put('/users/{user}', 'UsersController@update');
    Route::delete('/users/{user}', 'UsersController@destroy');
    Route::post('/users', 'UsersController@store');


    
    Route::get('/papers', 'PapersController@index');
    Route::get('/papers/{paper}', 'PapersController@show');
    Route::put('/papers/{paper}', 'PapersController@update');
    Route::delete('/papers/{paper}', 'PapersController@destroy');
    Route::post('/papers', 'PapersController@store');

});