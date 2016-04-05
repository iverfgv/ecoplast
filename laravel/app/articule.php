<?php namespace pagina;

use Illuminate\Database\Eloquent\Model;

class articule extends Model {

	//
	protected $table ="articulos";//nombre de la tabla de la bd
	protected $fillable=['titulo','contenido','idUsuario','idCategoria']
}
