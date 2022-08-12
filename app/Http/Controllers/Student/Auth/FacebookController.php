<?php

namespace App\Http\Controllers\Student\Auth;

use App\Profile;
use App\SocialNetwork;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{

    CONST DRIVER_TYPE = 'facebook';

    public function loginUsingFacebook()
    {
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function callback(Request $request)
    {
        try{
        $user = Socialite::driver(static::DRIVER_TYPE)->user();
        $saveUser = User::updateOrCreate([
            'social_links' => $user->getId(),
        ],[
            'name' => $user->getName(),
            'email' => $user->getEmail()
        ]);
        Auth::loginUsingId($saveUser->id());
        return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
