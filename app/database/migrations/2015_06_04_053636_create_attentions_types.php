<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentionsTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('attentions_types', function($table){
	       $table->create(); //creamos la tabla
			//definimos los métodos
	       $table->increments('id'); //tipo de datos autoincrementable llamado id
	       $table->string('descripcion');
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
	}

}
