<?php

class ModelController extends BaseController{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$modelos = Model::all();
		return View::make('modelos.index')
				->with('modelos',$modelos);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{

		$marca=Brand::find($id);//
		return View::make('modelos.create', array('marca'=>$marca));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store($id)
	{

		$marca=Brand::find($id);//

		$rules = array (

			'descripcion' => 'required',
			
		);

		  $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('modelos/crear')
                ->withErrors($validator);
               /* ->withInput(Input::except('password'));*/
                Session::flash('message', 'noooooo!');
        } else {
            // store
            $modelo = new Model;
            $modelo->descripcion  = Input::get('descripcion');
            $modelo->brand_id = $marca->id;
                  
            $modelo->save();

            // redirect
            Session::flash('message', 'Felicitaciones Usted ha creado un nuevo modelo!');
            return Redirect::to('/marcas/'.$marca->id.'/modelos');
         }
	}


		/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
		$modelos= Model::find($id);
		return View::make('modelos.edit')
				->with('modelos',$modelos);
	}


		/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	

	public function update($id){


			$rules=array(
				'descripcion'=>'required'
			
		);
		$validator=Validator::make(Input::all(),$rules);

		if($validator->fails())
		{
			return Redirect::to('modelos/'.$id.'/editar')
					->withErrors($validator);
		}
		else
		{
			$modelos=Model::find($id);
			$modelos->descripcion=Input::get('descripcion');
			$modelos->save();

			$marcas=Brand::find($modelos->brand_id);

			Session::flash('message','Modelo Actualizado');
			return Redirect::to('/marcas/'.$modelos->brand_id.'/modelos');
			
		}
	}


		/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id) {

		$modelos=Model::find($id);
		$modelos->delete();


		Session::flash('message','Modelo eliminado');
		return Redirect::to('/marcas/'.$modelos->brand_id.'/modelos');

	}

}

