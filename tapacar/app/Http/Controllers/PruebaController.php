<?php namespace tapacar\Http\Controllers;

class PruebaController extends Controller {

	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'holaaaa';
	}
	public function nombre($nombre)
	{
		return 'nombre'.$nombre;
	}
}
