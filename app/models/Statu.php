<?php
class Statu extends Eloquent {

	protected $table = 'status'; //people
	protected $fillable = array('descripcion','fecha','statu_type_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function statutype()
	{
		return $this->belongsTo('StatuType','status_types_id');
	}

	
}

?>