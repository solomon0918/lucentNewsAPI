<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function getUserContact($id){
    	return Contact::where('user_id', '=', $id)->with([
			'user' => function($q){
				$q->select('user_id', 'is_active');
			}, 'role'
		])->get();
	}
}
