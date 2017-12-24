<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = array('street', 'city', 'country', 'zip_code', 'address_role_id');

	protected $primaryKey = 'address_id';

	protected $hidden = array('address_id','user_id', 'created_at', 'updated_at');

	protected $table = 'users_address';

	public function user(){
		return $this->belongsTo('\App\User', 'user_id');
	}

	public function role(){
		return $this->belongsTo('\App\AddressRole', 'address_role_id');
	}
}
