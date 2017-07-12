<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class adminLoginController extends Controller
{
    protected $redirectTo = '/admin/movie';
    protected $redirectAfterLogout = '/admin/login';

	use AuthenticatesUsers{
		logout as performLogout;
	}

	protected function guard()
	{
		return Auth::guard('admin');
	}

	public function logout(Request $r)
	{   
        
		$this->performLogout($r);
		return redirect()->route('adminLogin');
	}
}
