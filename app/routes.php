<?php

/*
|--------------------------------------------------------------------------
| Rutas de mi aplicacion
|--------------------------------------------------------------------------
|
*/

Route::get('/','HomeController@index');
Route::get('/usuarios','UserController@index');
Route::get('/usuarios/crear','UserController@create');
Route::post('/usuarios','UserController@store');
Route::get('/usuarios/{id}','UserController@show');
Route::get('/usuarios/{id}/editar','UserController@edit');
Route::post('/usuarios/{id}','UserController@update');
Route::post('/usuarios/{id}/eliminar','UserController@destroy');

