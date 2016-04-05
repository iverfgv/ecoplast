<?php namespace tapacar\Http\Controllers;

use tapacar\Http\Requests;
use tapacar\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller {
	public function index(){

	}
	public  function show($id){
		$producto = \tapacar\Articulos::Find($id);
		Cart::add($producto->codigo, $producto->etiqueta, 1, $producto->precio);
		return view('tapacar.venta', ['cart' => Cart::content()]);
		//$productos = \tapacar\Articulos::All();
		//return view('tapacar.index',compact('productos'));
		//return redirect()->back();
	}
	//
	public function AddProduct(){
		//Cart::add('192ao12', 'Product 1', 1, 9.99);
		//Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'));
		//return view('venta', ['cart' => Cart::content()]);

		return "Hola mundo";

	}

}
