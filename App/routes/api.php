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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function() {
    Route::post('login', 'AuthController@login');
    Route::delete('logout', 'AuthController@logout');
});

Route::group(['prefix' => 'users'], function() {
    Route::post('/', 'UserController@add');
    Route::get('/', 'UserController@get');
    Route::get('/{id}', 'UserController@find');
    Route::delete('/{id}', 'UserController@delete');
    Route::match(['put', 'post'],'/{id}', 'UserController@update');
});

Route::group(['prefix' => 'roles'], function() {
    Route::post('/', 'RoleController@add');
    Route::get('/', 'RoleController@get');
    Route::get('/{id}', 'RoleController@find');
    Route::delete('/{id}', 'RoleController@delete');
    Route::match(['put', 'post'],'/{id}', 'RoleController@update');
});

Route::group(['prefix' => 'groups'], function() {
    Route::post('/', 'GroupController@add');
    Route::get('/', 'GroupController@get');
    Route::get('/{id}', 'GroupController@find');
    Route::delete('/{id}', 'GroupController@delete');
    Route::match(['put', 'post'],'/{id}', 'GroupController@update');
});
