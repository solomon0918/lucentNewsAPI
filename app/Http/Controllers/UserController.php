<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function index(){
		return User::where('is_active', 1)->get();
	}

	public function store(Request $request){
		//Save $request
	}

	public function create(){
		//Create $request
	}

	public function destory($id){
		//Delete record
	}

	public function show($id){
		return User::find($id);
	}

	public function update($id){
		//Update record
	}

	public function edit($id){
		//Edit record
	}

}
