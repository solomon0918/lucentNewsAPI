<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
	public function getUserAddress($id){
		return Address::where('user_id', '=', $id)->with([
			'user' => function($q){
				$q->select('user_id', 'is_active');
			}
		])->get();
	}
}
