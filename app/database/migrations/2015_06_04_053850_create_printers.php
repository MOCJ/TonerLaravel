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
	       $table->integer('printer_type_id')->unsigned();
	       $table->foreign('printer_type_id')->references('id')->on('printers_types');
	        $table->integer('office_id')->unsigned();
	        $table->foreign('office_id')->references('id')->on('offices');
	        $table->integer('model_id')->unsigned();
	       $table->foreign('model_id')->references('id')->on('models');
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
