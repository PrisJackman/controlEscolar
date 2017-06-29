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
Route::get('/registrarMaestros', "maestrosController@registra");
Route::post('/guardarMaestro', "maestrosController@guardar");
Route::get('/consultarMaestros', "maestrosController@consultar");
Route::get('/editarMaestro/{id}', "maestrosController@editar");
Route::get('/eliminarMaestro/{id}', "maestrosController@eliminar");
Route::post('/actualizarMaestro/{id}', "maestrosController@actualizar");

Route::get('/registrarMaterias', "materiasController@registra");
Route::post('/guardarMateria', "materiasController@guardar");
Route::get('/consultarMaterias', "materiasController@consultar");
Route::get('/editarMateria/{id}', "materiasController@editar");
Route::get('/eliminarMateria/{id}', "materiasController@eliminar");
Route::post('/actualizarMaterias/{id}', "materiasController@actualizar");
Route::get('/cargarMaterias/{id}', "materiasController@cargar");
Route::post('/cargarGrupo/{id}', "materiasController@cargarGrupo");
Route::get('/bajarGrupo/{id}/{idg}', "materiasController@bajarGrupo");

Route::get('/registrarGrupos', "gruposController@registra");
Route::post('/guardarGrupo', "gruposController@guardar");
Route::get('/consultarGrupos', "gruposController@consultar");
Route::get('/editarGrupo/{id}', "gruposController@editar");
Route::get('/eliminarGrupo/{id}', "gruposController@eliminar");
Route::post('/actualizarGrupos/{id}', "gruposController@actualizar");

Route::get('/pdfAlumnos','alumnosController@pdf');


