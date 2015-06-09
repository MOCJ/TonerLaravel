<?php
class Consumption extends Eloquent {

	protected $table = 'consumption'; //people
	protected $fillable = array('descripcion','fecha','consumption_type_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function consumption_type()
	{
		return $this->belongsTo('Consumption_Type','consumption_type_id');
	}

	
}

?>