<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = array('street', 'city', 'country', 'zip_code');

	protected $table = 'users_address';

	public function user(){
		return $this->belongsTo('User');
	}
}
