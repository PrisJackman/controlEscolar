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

Route::get('/', "homeController@index");

Route::get('/registrarAlumno', "alumnosController@registra");

Route::post('/guardarAlumno', "alumnosController@guardar");

Route::get('/consultarAlumnos', "alumnosController@consultar");

Route::get('/eliminarAlumno/{id}', "alumnosController@eliminar");

Route::get('/editarAlumno/{id}', "alumnosController@editar");

Route::post('/actualizarAlumno/{id}', "alumnosController@actualizar");
//Dar de alta maestros, materias, 


