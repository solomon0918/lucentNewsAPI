<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRole extends Model
{
    protected $table = "lk_contact_role";

    protected $primaryKey = "contact_role_id";

    public function contact(){
    	return $this->hasMany("\App\Contact", "contact_role_id");
    }
}
