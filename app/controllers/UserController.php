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
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}


}
