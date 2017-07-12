<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\memberModel;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $member = new memberModel;
        // $account = SocialAccount::whereProvider('facebook')
        //     ->whereProviderUserId($providerUser->getId())
        //     ->first();
        $account = $member->where('loginID', '=', $providerUser->getId())->first();
        if (is_null($account)) {
            $member->insert([
                'provider' => 'facebook',
                'loginID' => $providerUser->getId(),
                'name' => $providerUser->getName(),
                'email' => $providerUser->getEmail(),
                'profile' => $providerUser->getAvatar()
                ]);
             $user = $member->where('loginID', '=', $providerUser->getId())->first();
             return $user;
        } else {
            return $account;
        }
        
        // if ($account) {
        //     return $account->user;
        // } else {

        //     $account = new SocialAccount([
        //         'provider_user_id' => $providerUser->getId(),
        //         'provider' => 'facebook'
        //     ]);

        //     $user = User::whereEmail($providerUser->getEmail())->first();

        //     if (!$user) {

        //         $user = User::create([
        //             'email' => $providerUser->getEmail(),
        //             'name' => $providerUser->getName(),
        //         ]);
        //     }

        //     $account->user()->associate($user);
        //     $account->save();

        //     return $user;

        // }

    }
}