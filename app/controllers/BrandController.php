<?php

class BrandController extends \BaseController {


/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		
		$marca = Brand::all();

		return View::make('marcas.index')
				->with('marca',$marca);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function vermodelos($id)
	{
		
		$modelos = DB::select('SELECT id, descripcion, brand_id FROM models where brand_id ='.$id.' ');
		$marca=Brand::find($id);
		return View::make('modelos.index', array('modelos' => $modelos, 'marca'=>$marca));
	

	
	}

	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('marcas.create');
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

			'descripcion' => 'required',
			
		);

		  $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('marcas/crear')
                ->withErrors($validator);
               /* ->withInput(Input::except('password'));*/
        } else {
            // store
            $marca = new Brand;
            $marca->descripcion  = Input::get('descripcion');
                  
            $marca->save();

            // redirect
            Session::flash('message', 'Felicitaciones Usted ha creado una nueva marca!');
            return Redirect::to('marcas');
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


            $marcas = Brand::find($id);

        // show the view and pass the nerd to it
        return View::make('marcas.show')
            ->with('marcas', $marcas);


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
		$marcas= Brand::find($id);
		return View::make('marcas.edit')
				->with('marcas',$marcas);


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function update($id)
	{
		$rules=array(
				'descripcion'=>'required'
			
		);
		$validator=Validator::make(Input::all(),$rules);

		if($validator->fails())
		{
			return Redirect::to('marcas/'.$id.'/editar')
					->withErrors($validator);
		}
		else
		{
			$marcas=Brand::find($id);
			$marcas->descripcion=Input::get('descripcion');

			$marcas->save();
 
			Session::flash('message','Marca Actualizada');
			return Redirect::to('marcas');

		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{

		$marcas=Brand::find($id);
		$marcas->delete();

		Session::flash('message','Marca eliminada');
		return Redirect::to('marcas');

	}









}