<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarques', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('embarques_id');
            $table->integer('usuarios_id')->unsigned();
            $table->foreign('usuarios_id')->references('id')->on('users');
            $table->integer('materiales_id')->unsigned();
            $table->foreign('materiales_id')->references('id')->on('materiales');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->decimal('peso',10,2);
            $table->dateTime('fechalocal');
            $table->timestamp('fecha');
            $table->string('codigocontrol',100);
            $table->tinyInteger('cancelado',100);
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
        Schema::drop('embarques');
    }
}
