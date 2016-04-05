<?php namespace tapacar\Http\Controllers;

use tapacar\Http\Requests;
use tapacar\Http\Controllers\Controller;

use Illuminate\Http\Request;

class articulosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articulos = \tapacar\Articulos::All();
		return view('tapacar.vistaArticulos',compact('articulos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$art = \tapacar\Articulos::find($id);
		return view('tapacar.editArticulo')->with('art',$art);
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
	public function update(Request $request,$id)
	{
		$art = \tapacar\Articulos::find($id);
		$art->fill($request->all());		
		$art->save();
		$articulos = \tapacar\Articulos::All();
		return view('tapacar.vistaArticulos',compact('articulos'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\tapacar\Articulos::destroy($id);
		$articulos = \tapacar\Articulos::All();
		return view('tapacar.vistaArticulos',compact('articulos'));

	}

}
