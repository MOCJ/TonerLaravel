<?php
class Employee extends Eloquent {

	protected $table = 'employees'; //people
	protected $fillable = array('nombres','apellidos','dni','cargo','telefono','office_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function office()
	{
		/*return $this->belongsTo('ConsumptionType','consumptions_types_id');*/
		return $this->belongsTo('Office','office_id');
	}

	
}

?>