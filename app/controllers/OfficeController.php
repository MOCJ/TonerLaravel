<?php

class OfficeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		/*$users = User::all();

		return View::make('usuarios.index')
				->with('usuario',$users);*/


		$oficina = Office::all();

		return View::make('oficinas.index')
				->with('oficina',$oficina);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('oficinas.create');
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

			'nombre' => 'required',
			'ubicacion' => 'required',
			'anexo' => 'required'

		);

		  $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('oficinas/crear')
                ->withErrors($validator);
               /* ->withInput(Input::except('password'));*/
        } else {
            // store
            $oficina = new Office;
            $oficina->nombre  = Input::get('nombre');
            $oficina->ubicacion  = Input::get('ubicacion');
            $oficina->anexo  = Input::get('anexo');
         
            $oficina->save();

            // redirect
            Session::flash('message', 'Felicitaciones Usted ha creado una nueva oficina!');
            return Redirect::to('oficinas');
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
		 /* $user = User::find($id);

        // show the view and pass the nerd to it
        return View::make('usuarios.show')
            ->with('usuarios', $user);*/


            $oficinas = Office::find($id);

        // show the view and pass the nerd to it
        return View::make('oficinas.show')
            ->with('oficinas', $oficinas);


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
		/*$users = User::find($id);

        // show the edit form and pass the nerd
        return View::make('usuarios.edit')
            ->with('usuarios', $users);*/


            $oficinas = Office::find($id);

        // show the edit form and pass the nerd
        return View::make('oficinas.edit')
            ->with('oficinas', $oficinas);

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
            'nombre'       => 'required',
           'ubicacion'      => 'required',
           'anexo'      => 'required'
           
        );
        $validator = Validator::make(Input::all(), $rules);



        // process the login
        if ($validator->fails()) 
        {
            return Redirect::to('oficinas/' . $id . '/editar')
                ->withErrors($validator); 
        } 
        else
        {
            // store
            $oficinas = Office::find($id);
            $oficinas->nombre       = Input::get('nombre');
            $oficinas->ubicacion       = Input::get('ubicacion');
            $oficinas->anexo       = Input::get('anexo');

          
            $oficinas->save();

            // redirect
            Session::flash('message', 'Oficina actualizada satisfactoriamente!');
            return Redirect::to('oficinas');
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
        $oficinas = Office::find($id);
        $oficinas->delete();

        // redirect
        Session::flash('message', 'Oficina eliminada correctamente!');
        return Redirect::to('oficinas');

		
	}
















}