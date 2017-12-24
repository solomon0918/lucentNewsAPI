<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'middle_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function contact(){
        return $this->hasMany('\App\Contact', 'user_id');
    }

    public function address(){
        return $this->hasMany('\App\Address', 'user_id');
    }

    public function title(){
        return $this->belongsTo('\App\UserTitle', 'user_title_id');
    }

    public function role(){
        return $this->belongsTo('\App\UserRole', 'user_role_id');
    }
}
