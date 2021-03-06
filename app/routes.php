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

Route::get('/','HomeController@index');
Route::get('/oficinas','OfficeController@index'); //Muetra todas las oficinas
Route::get('/oficinas/crear','OfficeController@create'); // Crea una nueva oficina
Route::post('/oficinas','OfficeController@store'); // Guarda nueva oficina creada
Route::get('/oficinas/{id}','OfficeController@show'); // Muestra una oficina especifica {id}
Route::get('/oficinas/{id}/editar','OfficeController@edit'); // Edita una oficina especifica {id}
Route::post('/oficinas/{id}/editar','OfficeController@update'); // Actualiza una oficina especifica {id}
Route::post('/oficinas/{id}/eliminar','OfficeController@destroy'); // Elimina una oficina especifica {id}

/* Rutas para marcas de las impresoras */

Route::get('/','HomeController@index');
Route::get('/marcas','BrandController@index'); //Muetra todas las Marcas
Route::get('/marcas/crear','BrandController@create'); // Crea una nueva marca
Route::post('/marcas','BrandController@store'); // Guarda nueva marca
Route::get('/marcas/{id}/editar','BrandController@edit'); // Edita una marca especifica {id}
Route::post('/marcas/{id}/editar','BrandController@update'); // Actualiza una marca especifica {id}
Route::post('/marcas/{id}/eliminar','BrandController@destroy'); //Eliminar una marca especifica
Route::get('/marcas/{id}/modelos','BrandController@vermodelos'); //Muetra todas las Marcas

/* Rutas para modelos de las marcas de las impresoras */

Route::get('/','HomeController@index');
Route::get('/modelos','ModelController@index'); //Muetra todas las oficinas
Route::get('/modelos/crear/{id}','ModelController@create'); // Crea una nueva oficina
Route::post('/modelos/crear/{id}','ModelController@store'); // Guarda nueva oficina creada
Route::get('/modelos/{id}/editar','ModelController@edit'); // Edita una marca especifica {id}
Route::post('/modelos/{id}/editar','ModelController@update'); // Actualiza una marca especifica {id}
Route::post('/modelos/{id}/eliminar','ModelController@destroy'); //Eliminar una marca especifica

/* Rutas para las impresoras */

Route::get('/','HomeController@index');
Route::get('/impresoras','PrinterController@index'); //Muetra todas las oficinas
Route::get('/impresoras/crear','PrinterController@create'); // Crea una nueva oficina

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
