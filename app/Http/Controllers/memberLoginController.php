<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class memberLoginController extends Controller {

	protected $redirectTo = '/';
	use AuthenticatesUsers;

    public function __construct()
    {
        $this->redirectTo = url()->previous();
        $this->middleware('guest', ['except' => 'logout']);
    }

	protected function guard() {
		return Auth::guard('member');
	}

	public function checklogin(){
        if (Auth::guard('member')->check()) {
            return \Response::json(['status' =>true]);
        } else {
            return \Response::json(['status' =>false]);
        }

	}



}
