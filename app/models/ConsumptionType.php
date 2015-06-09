<?php


class ConsumptionType extends Eloquent {

	protected $table = 'consumption_type'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function consumption()
	{
		return $this->hasMany('Consumption','t_consumption_id');
	}

	
}

?>