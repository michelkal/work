<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function getUserRegister(){
		return view('createaccount');
	}


	public function getProgressList(){
		return view('user-progress');
	}


	public function registerNewUser(Request $req){
		$data = $req->except('_token');
		$valid = \Validator::make($data, [
			'g-recaptcha-response' => 'required'
			]);


		if ($valid->fails()) {
			return "Prove you are not a robot";
		}else{
			//return $data;
			$usr = new User;
			$usr->name = $data['name'];
			$usr->email = $data['email'];
			$usr->phone = $data['phone'];
			$usr->password = \Hash::make($data['confirmPass']);
			$usr->country = $data['country'];

			if ($usr->save()) {
				return "success";
			}
		}
	}
}
