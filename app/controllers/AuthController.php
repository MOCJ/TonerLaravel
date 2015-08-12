<?php

class AuthController extends \BaseController {


/*<<<<<<< HEAD*/

/*Funcion para mostrar login*/
	public function showLogin()
		{
			
				 // Verificamos si hay sesión activa
	        if (Auth::check())
	        {
	            // Si tenemos sesión activa mostrará la página de inicio
	            return Redirect::to('/');
	        }
	        // Si no hay sesión activa mostramos el formulario
	        return View::make('usuarios.login');
			
		}

/*Funcion para verificar datos de usuario*/
	public function postLogin()
		{
			
				// Obtenemos los datos del formulario
	        $data = array(
	            'usuario' => Input::get('usuario'),
	            'password' => Input::get('password')
	        );

	        	 
	        // Verificamos los datos
	        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña -->  
	        {
	            // Si nuestros datos son correctos mostramos la página de inicio
	            return Redirect::to('/');
	        }
	        // Si los datos no son los correctos volvemos al login y mostramos un error
	        return Redirect::to('login')->with('error_message', 'Datos incorrectos')->withInput();
			
		}

	public function logout()
		{
			
			// Cerramos la sesión
	        Auth::logout();
	        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
	        return Redirect::to('login')->with('error_message', 'Tu sesion ha sido cerrada satisfactoriamente');
				
		}

 /* >>>>>>> b07eb64ac0e810bb6bd10cd71434ab9b07aaccd6 */
}