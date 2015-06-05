<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('offices', function($table){
	       $table->create(); //creamos la tabla
			//definimos los métodos
	       $table->increments('id'); //tipo de datos autoincrementable llamado id
	       $table->string('nombre');
	       $table->string('ubicacion');
	       $table->string('anexo');
	       $table->integer('employees_id')->unsigned();
	       $table->foreign('employees_id')->references('id')->on('employees');
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
