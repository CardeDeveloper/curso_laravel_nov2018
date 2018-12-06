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

Route::get('/students/{id}/grades', 'StudentsController@grades');

Route::get('/students/{id}/grades/pdf', 'StudentsController@kardexPDF');

Route::get('/student/{id}', function ($id) {
    return "tienes acceso a esta vista por tener mas de 9 de promedio";
})->middleware('grades');

Route::resource('/cursos', 'CursosController');
Route::resource('/students', 'StudentsController');


Route::get('many' , 'StudentsController@masiveAssignment');