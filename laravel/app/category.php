<?php namespace pagina;

use Illuminate\Database\Eloquent\Model;

class category extends Model {

	//
	protected  $table="categorias";

	protected $fillable=['name'];

}
