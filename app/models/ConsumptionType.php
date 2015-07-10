<?php


class ConsumptionType extends Eloquent {

	protected $table = 'consumptions_types'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function consumption()
	{
		return $this->hasMany('Consumption','consumptions_types_id');
	}

	
}

?>