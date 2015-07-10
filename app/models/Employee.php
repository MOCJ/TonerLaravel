<?php
class Consumption extends Eloquent {

	protected $table = 'employees'; //people
	protected $fillable = array('nombres','apellidos','dni','cargo','telefono');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function consumptiontype()
	{
		/*return $this->belongsTo('ConsumptionType','consumptions_types_id');*/
	}

	
}

?>