<?php
class Printer extends Eloquent {

	protected $table = 'printers'; //people
	protected $fillable = array('cod_patrimonial','printer_type_id','office_id','model_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function printertype()
	{
		return $this->belongsTo('PrinterType','printer_type_id');
	}

	
}

?>