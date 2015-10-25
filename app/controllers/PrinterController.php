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








}