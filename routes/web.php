<?php

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
    return view('welcome');
});



Route::get('cube/', [
	'uses' => 'CubeController@create',
   	'as' => 'cube'
]);


Route::get('cube_result/{tabla_op}/{N}/{M}', [
	'uses' => 'CubeController@getResult',
   	'as' => 'cube.result'
]);
