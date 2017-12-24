<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "lk_user_role";

    protected $primaryKey = "role_id";

    public function user(){
    	return $this->hasMany('\App\User', 'user_role_id');
    }
}
