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


Route::get('helloWorld', function () {
    return '<h1>Hello World</h1>';
});

/*
Ventajas del router de laravel:
								- maneja controladores
								-recursos de controladores
								-Seguridad con middlewares
								- hace URL'S limpias == Ganamos SEO && UX
								nuestrapagina.com/index.php
								nuestrapagina.com/usuario

*/
