<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('users');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('telefono');
			$table->string('movil');
			$table->string('pais');
			$table->string('estado');
			$table->string('delegacion');
			$table->string('colonia');
			$table->string('cdpostal');
			$table->string('num_ext');
			$table->string('num_int');
			$table->string('calles');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datos_usuarios');
	}

}
