<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('attentions', function($table){
	       $table->create(); //creamos la tabla
			//definimos los métodos
	       $table->increments('id'); //tipo de datos autoincrementable llamado id
	       $table->date('fecha');
	       $table->integer('nroficha');
	       $table->integer('services_types_id')->unsigned();
	       $table->foreign('services_types_id')->references('id')->on('services_types');
	       $table->integer('attentions_types_id')->unsigned();
	       $table->foreign('attentions_types_id')->references('id')->on('attentions_types');
	       $table->integer('consumptions_id')->unsigned();
	       $table->foreign('consumptions_id')->references('id')->on('consumptions');


	       $table->timestamps(); //creamos dos columnas más, que servirán para tener un control de la fecha y la hora de cuándo un registro se inserta o se modifica
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('attentions');
	}

}
