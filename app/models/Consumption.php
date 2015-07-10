<?php
class Consumption extends Eloquent {

	protected $table = 'consumptions'; //people
	protected $fillable = array('descripcion','fecha','consumption_type_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function consumptiontype()
	{
		return $this->belongsTo('ConsumptionType','consumptions_types_id');
	}

	
}

?>