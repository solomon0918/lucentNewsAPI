<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function getUserInfo($id){
		return User::where('user_id', '=', $id)->with([
			'address' => function($q){
				$q->select('user_id', 'street', 'city', 'country', 'zip_code', 'address_role_id');
			}
		])->get();
	}

}
