<?php


class PrinterType extends Eloquent {

	protected $table = 'printers_types'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function printer()
	{
		return $this->hasMany('Printer','printer_type_id');
	}

	
}

?>