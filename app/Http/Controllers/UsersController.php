<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function getUserRegister(){
		return view('createaccount');
	}


	public function getProgressList(){
		return view('user-progress');
	}
}
