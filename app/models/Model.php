<?php
class Model extends Eloquent {

	protected $table = 'models'; //people
	protected $fillable = array('descripcion','brand_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function brand()
	{
		return $this->belongsTo('Brand','brand_id');
	}

	public function printer()
	{
		return $this->hasMany('Printer','model_id');
	}

	
}

?>