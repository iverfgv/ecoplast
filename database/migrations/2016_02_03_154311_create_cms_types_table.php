<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_types', function ($table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('title',250); 
            $table->text('description'); 
            $table->boolean('active'); 
            $table->integer('register_by'); 
            $table->integer('modify_by');
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
        Schema::drop('cms_types');
    }
}
