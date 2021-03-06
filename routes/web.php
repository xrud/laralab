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

Route::get('/meuController', 'meuController@meuMetodo');

Route::get('/lab/mvc', 'MVClabController@listar');

Route::get('/lab/migrate', 'migrateLabController@retornaView');

Route::get('/lab/crud', 'crudGenaratorLabController@index');

Route::get('/lab/crudNovo', 'crudGenaratorLabController2@index');

Route::get('/sistema', 'CursoCrud@index');
