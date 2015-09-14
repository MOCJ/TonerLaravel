<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrinters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('printers', function($table){
	       $table->create(); //creamos la tabla
			//definimos los métodos
	       $table->increments('id'); //tipo de datos autoincrementable llamado id
	       $table->string('cod_patrimonial');
	       $table->integer('printers_types_id')->unsigned();
	       $table->foreign('printers_types_id')->references('id')->on('printers_types');
	        $table->integer('offices_id')->unsigned();
	        $table->foreign('offices_id')->references('id')->on('offices');
	        $table->integer('models_id')->unsigned();
	       $table->foreign('models_id')->references('id')->on('models');
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
		Schema::drop('printers');
	}

}
