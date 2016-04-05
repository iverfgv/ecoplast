<?php namespace tapacar\Http\Controllers;

use tapacar\Http\Requests;
use tapacar\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('tapacar.index');
	}


}
