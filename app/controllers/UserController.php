<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users = User::all();

		return View::make('usuarios.index')
				->with('usuario',$users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('usuarios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array (

			'usuario' => 'required',
			'contrasena' => 'required'

		);

		  $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuarios/crear')
                ->withErrors($validator)
                ->withInput(Input::except('contrasena'));
        } else {
            // store
            $usuario = new User;
            $usuario->usuario  = Input::get('usuario');
            $usuario->contrasena = Input::get('contrasena');
            $usuario->save();

            // redirect
            Session::flash('message', 'Felicitaciones Usted ha creado un Nuevo Usuario!');
            return Redirect::to('usuarios');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		  $user = User::find($id);

        // show the view and pass the nerd to it
        return View::make('usuarios.show')
            ->with('usuarios', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$users = User::find($id);

        // show the edit form and pass the nerd
        return View::make('usuarios.edit')
            ->with('usuarios', $users);

	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'usuario'       => 'required',
            'contrasena'      => 'required'
           
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuarios/' . $id . '/editar')
                ->withErrors($validator)
                ->withInput(Input::except('contrasena'))
                ;
        } else {
            // store
            $usuarios = user::find($id);
            $usuarios->usuario       = Input::get('usuario');
            $usuarios->contrasena     = Input::get('contrasena');
           
            $usuarios->save();

            // redirect
            Session::flash('message', 'Usuario actualizado satisfactoriamente!');
            return Redirect::to('usuarios');
        }

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//


		 // delete
        $usuarios = User::find($id);
        $usuarios->delete();

        // redirect
        Session::flash('message', 'Usuario eliminado correctamente!');
        return Redirect::to('usuarios');

		
	}

<<<<<<< HEAD
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

	public function postLogin()
		{
			
				// Obtenemos los datos del formulario
	        $data = [
	            'usuario' => Input::get('usuario'),
	            'contrasena' => Input::get('contrasena')
	        ];
	 
	        // Verificamos los datos
	        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
	        {
	            // Si nuestros datos son correctos mostramos la página de inicio
	            return Redirect::intended('/');
	        }
	        // Si los datos no son los correctos volvemos al login y mostramos un error
	        return Redirect::back()->with('error_message', 'Datos incorrectos')->withInput();
			
		}

	public function logout()
		{
			
				// Cerramos la sesión
	        Auth::logout();
	        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
	        return Redirect::to('login')->with('error_message', 'Inicio de sesion satisfactoriamente');
				
		}

=======
	/*
	public function showlogin()
	{
		
		 // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');

		
	}

	public function postlogin()
	{
		

		
	}

	public function logout()
	{
		

		
	}*/

	
>>>>>>> b07eb64ac0e810bb6bd10cd71434ab9b07aaccd6


}
