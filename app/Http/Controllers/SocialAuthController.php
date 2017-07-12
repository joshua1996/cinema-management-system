<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\memberModel;
use Socialite;
use App\SocialAccountService;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;


class SocialAuthController extends Controller
{
	//use AuthenticatesUsers;
     public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback(SocialAccountService $service)
    {
    	 $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
    	 //echo $user;
    	//Auth::guard('member')->attempt($user, true);
        Auth::guard('member')->login($user, true);
    	// Auth::guard('member')->attempt($user, true);
        return redirect()->to('/');
    }
}
