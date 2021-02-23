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

Route::get('/','UsuariosController@index')->name('index');
Route::get('/crear','UsuariosController@create')->name('create');
Route::post('/store','UsuariosController@store')->name('store');
Route::get('/editar/{Usario}','UsuariosController@edit')->name('edit');
Route::put('/update/{Usuario}','UsuariosController@update')->name('update');
Route::delete('/eliminar/{Usuario}','UsuariosController@destroy')->name('destroy');
