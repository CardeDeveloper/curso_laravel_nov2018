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

//controlador
//Route::get('/{param?}', 'WelcomeController@index');
Route::post('/peticion','WelcomeController@postFunction');
Route::get('/peticion','WelcomeController@getFunction');
Route::get('/miPrimerControlador', 'MiPrimerControlador@mifuncion');
Route::resource('/cursos', 'cursosController');
//que pasa con el caso de los autos? - controladores -cuantas funciones