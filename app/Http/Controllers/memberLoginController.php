<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class memberLoginController extends Controller {

	protected $redirectTo = '/';
	use AuthenticatesUsers;

	protected function guard() {
		return Auth::guard('member');
	}

	public function checklogin(){
		return \Response::json(['status' => Auth::guard('member')]);
	}

}
