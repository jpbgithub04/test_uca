<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AlumnosController@index');
Route::get('/listadoa','AlumnosController@listado_alumno');

Route::get('/carga_alumno','AlumnosController@create');
Route::post('/carga_alumno','AlumnosController@store');

Route::get('/editar_alumno/{id}','AlumnosController@edit');
Route::patch('/editar_alumno/{id}','AlumnosController@update');

Route::delete('/eliminar_alumno/{id}','AlumnosController@destroy');

Route::get('/carga_profesor','ProfesoresController@create');
Route::post('/carga_profesor','ProfesoresController@store');

Route::get('/listadop','ProfesoresController@listado_profesores');

Route::get('/editar_profesor/{id}','ProfesoresController@edit');
Route::patch('/editar_profesor/{id}','ProfesoresController@update');

Route::delete('/eliminar_profesor/{id}','ProfesoresController@destroy');

Route::get('/carga_curso','CursosController@create');
Route::post('carga_curso','CursosController@store');

Route::get('/editar_curso/{id}','CursosController@edit');
Route::patch('/editar_curso/{id}','CursosController@update');

Route::delete('/eliminar_curso/{id}','CursosController@destroy');

Route::get('/listadoc','CursosController@listado_curso');

Route::get('/inscripcion_curso','InscripcionCursosController@create');
Route::post('/inscripcion_curso','InscripcionCursosController@store');

Route::get('/editar_icurso/{id}','InscripcionCursosController@edit');
Route::patch('/editar_icurso/{id}','InscripcionCursosController@update');

Route::delete('/eliminar_icurso/{id}','InscripcionCursosController@destroy');

Route::get('listado_icurso','InscripcionCursosController@listado_icursos');
