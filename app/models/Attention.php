<?php
class Attention extends Eloquent {

	protected $table = 'attentions'; //people
	protected $fillable = array('fecha','nroficha','printer_id','attention_type_id','statu_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function attentiontype()
	{
		return $this->belongsTo('AttentionType','attention_type_id');
	}

	
}

?>