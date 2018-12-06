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
    return view('login');
})->name('home');

Route::get('/autos/create', function(){
	return view('cars.create');
});

Route::get('/autos/edit', function(){
	return view('cars.edit');
});

Route::get('/autos/show', function(){
	return view('cars.show');
});

Route::get('/prueba/{parametro}', function($parametro){
	//return view('example', ['parametro' => $parametro]);
	return view('example')->with('parametro', $parametro);g
});
