<?php

/*
|--------------------------------------------------------------------------
| Rutas de mi aplicacion
|--------------------------------------------------------------------------
|
*/


/* Rutas para usuarios ****  */

Route::get('/','HomeController@index');
Route::get('/usuarios','UserController@index'); //Muetra todos los usuarios
Route::get('/usuarios/crear','UserController@create'); // Crea un usuario
Route::post('/usuarios','UserController@store'); // Guarda nuevo usuario creado
Route::get('/usuarios/{id}','UserController@show'); // Muestra un usuario especifico {id}
Route::get('/usuarios/{id}/editar','UserController@edit'); // Edita un usuario especifico {id}
Route::post('/usuarios/{id}','UserController@update'); // Actualiza un usuario especifico {id}
Route::post('/usuarios/{id}/eliminar','UserController@destroy'); // Elimina un usuario especifico {id}


/* Rutas para oficinas ****  */



/* Rutas para login ****  */


Route::get('login', 'AuthController@showLogin'); /*mostrar login}}*/
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logout'	);	//	Cerrar sesión		
/*=======
Route::get('login', 'AuthController@showLogin'); /*mostrar login}}
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logout'	);	//	cierra sesion		

/*Rutas privadas solo para usuarios autentficados*/

Route::group(['before' => 'Auth'], function()
{
    Route::get('/', 'HomeController@index'); // Vista de inicio
});
