<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_venta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_venta')->unsigned();
			$table->foreign('id_venta')->references('id')->on('ventas');
			$table->string('producto');
			$table->integer('cantidad');
			$table->decimal('importe_uni',5,2);
			$table->decimal('import_total',5,2);
			$table->rememberToken();
			$table->timestamps();
		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_venta');
	}

}
