<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressRole extends Model
{
    protected $table = "lk_address_role";

    protected $primaryKey = "address_role_id";

    public function address(){
    	return $this->hasMany('\App\Address', 'address_role_id');
    }
}
