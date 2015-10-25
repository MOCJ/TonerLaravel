<?php

class PrinterController extends \BaseController {


/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		
		$impresora = Printer::all();

		return View::make('impresoras.index')
				->with('impresora',$impresora);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('impresoras.create');
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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */








}