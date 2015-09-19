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
	       $table->integer('printer_id')->unsigned();
	       $table->foreign('printer_id')->references('id')->on('printers_types');
	       $table->integer('attention_type_id')->unsigned();
	       $table->foreign('attention_type_id')->references('id')->on('attentions_types');
	       $table->integer('statu_id')->unsigned();
	       $table->foreign('statu_id')->references('id')->on('status');


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
