<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreaCode;
use App\User;
use App\Address;
use App\Contact;

class BaseController extends Controller
{
    public function getAllUser(){
		return User::select('user_id', 'first_name', 'middle_name', 'last_name', 'bdate', 'email', 'password', 'user_role_id', 'is_active')->with([
			'address' => function($query){
				$query->select('user_id', 'street', 'city', 'country', 'zip_code', 'address_role_id');
			},
			'contact' => function($query){
				$query->select('user_id', 'area_code', 'country', 'number', 'contact_role_id');
			}
		])->orderBy('user_id')->get();
	}

	public function getAllUserAddress(){
		return Address::with(['user' => function($q){
    		$q->select('user_id', 'is_active');
    	}])->orderBy('created_at', 'desc')->get();
	}

	public function getAllUserContact(){
		return Contact::with(['user' => function($q){
			$q->select('user_id', 'is_active');
		}])->orderBy('created_at', 'desc')->get();
	}

	public function getAllAreaCode(){
		return AreaCode::all();
	}
}
