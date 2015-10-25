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

	public function office()
	{
		return $this->belongsTo('Office','office_id');
	}

	public function model()
	{
		return $this->belongsTo('Model','model_id');

	}
	
}

?>