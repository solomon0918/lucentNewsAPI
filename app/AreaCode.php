<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaCode extends Model
{
    protected $table = 'lk_contact_country_code';

    protected $hidden = array('id');
}
