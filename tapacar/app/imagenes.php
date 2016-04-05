<?php namespace tapacar;

use Illuminate\Database\Eloquent\Model;

class imagenes extends Model {

	protected $table='imagenes';
	protected $fillable=['ruta','tipo','status','descripcion'];
	protected $guarded = ['id'];
}
