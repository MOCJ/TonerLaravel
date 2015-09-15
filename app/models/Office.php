<?php
class Office extends Eloquent {

	protected $table = 'offices'; //people
	protected $fillable = array('nombre','ubicacion','anexo');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function employee()
	{
		/*return $this->belongsTo('ConsumptionType','consumptions_types_id');*/
		return $this->hasMany('Employee','offices_id');
	}

	
}

?>