<?php

namespace App\Https\Controllers\Auth;

use App\App\Https\Controllers\Controller;
use Illuminate\http\Resquest;
use App\Models\User;
use Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        return socialite::driver($provider)->redirect();
    }
}

public function handleProviderCallback($provider)
{
    //datos del usuario
    $social_user = socialite::driver($provider)->user();
    //comprobamos si el usuario ya existe
    if ($user=User::where('imail', $social_user->email)->first()){
        return $this->authAndRedirect(user);
    } else {
        $user = User::create([
            'name'=> $social_user->name,
            'email' => $social_user->email,
            'avatar' => $social_user->avatar,
        ]);
        return $this->authAndRedirect($user);
    }    
}

public function authAndRedirect($user)

{
    Auth::login($user);
    return redirect()->to('/home#');
}