<?php


class AttentionType extends Eloquent {

	protected $table = 'attentions_types'; //people
	protected $fillable = array('descripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function attention()
	{
		return $this->hasMany('Attention','attention_type_id');
	}

	
}

?>