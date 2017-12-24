<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTitle extends Model
{
    protected $table = "lk_user_title";

    protected $primaryKey = "user_title_id";

    public function user(){
    	return $this->hasMany('\App\User', 'user_title_id');
    }
}
