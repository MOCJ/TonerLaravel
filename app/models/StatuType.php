<?php


class StatuType extends Eloquent {

	protected $table = 'status_types'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function statu()
	{
		return $this->hasMany('Statu','statu_type_id');
	}

	
}

?>