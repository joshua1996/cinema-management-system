<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\memberModel;

class memberRegisterController extends Controller {

	protected $redirectPath = '/';

	public function createmember() {
		return view('movieclub.createmember');
	}

	public function register(Request $request) {

		//Validates data
		//	$this->validator($request->all())->validate();

		//Create seller
		$seller = $this->create($request->all());
 
		//Authenticates seller
		$this->guard()->login($seller);

		//Redirects sellers
		return redirect($this->redirectPath);
	}

	// protected function validator(array $data) {
	// 	return Validator::make($data, [
	// 		'name' => 'required|max:255',
	// 		'email' => 'required|email|max:255|unique:seller',
	// 		'password' => 'required|min:6|confirmed',
	// 	]);
	// }

	protected function create(array $data) {
		//$member = new memberModel();
		return memberModel::create([
			'name' => $data['fullname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'loginID' => 'member'.uniqid(),
            'profile' => '/img/default-user.png'
		]);
	}

	protected function guard() {
		return Auth::guard('member');
	}
}
