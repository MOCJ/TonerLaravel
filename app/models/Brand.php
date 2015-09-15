<?php


class Brand extends Eloquent {

	protected $table = 'brands'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function model()
	{
		return $this->hasMany('Model','brands_id');
	}

	
}

?>