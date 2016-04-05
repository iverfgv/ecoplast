<?php namespace tapacar\Http\Controllers;

use tapacar\Http\Requests;
use tapacar\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function CrearImagen()
	{
		return view('frmImagen');
	}
	public function AdminImagen(){
		 $img=\tapacar\imagenes::all();
       	return view('admin_imagen',['img'=>$img]);
	}
	public function GuardarImagen(Request $request)
	{
        //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       //$nombre = $file->getClientOriginalName();
 		$nombre=uniqid().'.'.$file->getClientOriginalExtension();
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 		//echo $request->input('descripcion');
       \tapacar\imagenes::create([
       		'ruta'=>$nombre,
       		'tipo'=>$file->getClientOriginalExtension(),
       		'status'=>true,
       		'descripcion'=>$request->input('descripcion')
       	]);
      Return redirect()->action('AdminController@AdminImagen');
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
		 \tapacar\imagenes::destroy($id);
		 Return redirect()->action('AdminController@AdminImagen');
		 if (Request::ajax())
        {
            return Response::json(array (
                'success' => true,
                'msg'     => 'imagenes ' . ' eliminado',
                'id'      => 0
            ));
        }
        else
        {
             Return redirect()->action('AdminController@AdminImagen');
        }
	}

}
