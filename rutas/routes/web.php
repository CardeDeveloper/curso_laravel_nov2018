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
    return view('layouts.main');
});

Route::get('hola', function(){
	return "hola mundo";
});

Route::get('html', function(){
	return '<h1>hola mundo</h1>';
});

/*
Route::get('usuario/{nombre}', function($name){
	return "hola ". $name;
});*/

Route::get('usuario/{nombre}/{apellido?}', function($name , $lastname = null){
	return "hola ". $name ." ". $lastname;
});

Route::get('user/{id}', 'PruebaController@show');
