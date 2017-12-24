<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'users_contact';

    protected $fillable = array('country_code', 'contact_role_id', 'number');

    protected $hidden = array('contact_id', 'created_at', 'updated_at', 'user_id');

    public function user(){
    	return $this->belongsTo('\App\User', 'user_id');
    }
}
