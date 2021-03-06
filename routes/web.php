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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas de cursos
Route::get('/cursos', 'CursoController@index');
Route::get('/cursos/apagar/{id}', 'CursoController@destroy');
Route::get('/cursos/cadastrar', 'CursoController@create');
Route::post('/cursos/cadastrar','CursoController@store');
Route::get('cursos/editar/{id}', 'CursoController@edit');
Route::post('cursos/{id}', 'CursoController@update');

//Rotas de Sala
Route::get('/salas', 'SalaController@index');

//Rotas de Professor
Route::get('/professores', 'ProfessorController@index');