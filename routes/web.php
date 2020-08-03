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

Route::get('/', 'PageController@index')->name('home');

Route::get('/agregar', 'PageController@agregar')->name('agregar');
Route::post('/', 'TipController@store')->name('guardar');

Route::get('/listar', 'TipController@listar')->name('listar');
//Route::get('/agregar', 'TipController@index')->name('agregar');
Route::get('/semana', 'TipController@show')->name('mostrar');

Route::get('/agregar-usuario', 'UserController@index')->name('agregar-usuario');
Route::get('/listar-usuarios', 'UserController@show')->name('listar-usuarios');
Route::post('/guardar-usuario', 'UserController@store')->name('guardar-usuario');
//Route::get('/editar-usuario/{$id}', 'UserController@edit')->name('editar-usuario');
