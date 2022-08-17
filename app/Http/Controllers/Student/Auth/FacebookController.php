<?php

namespace App\Http\Controllers\Student\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class FacebookController extends Controller
{

    const DRIVER_TYPE = 'facebook';
    const DRIVER_TYPE_GOOGLE = 'google';

    public function loginUsingFacebook()
    {
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver(static::DRIVER_TYPE)->user();
            $saveUser = User::updateOrCreate([
                'provider_id' => $user->getId(),
            ], [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Hash::make('Sphoton123'),
                'role' => 'student',
            ]);

            Auth::login($saveUser);
            return redirect()->route('dashboard');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function loginUsingGoogle()
    {
        return Socialite::driver(static::DRIVER_TYPE_GOOGLE)->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver(static::DRIVER_TYPE_GOOGLE)->user();
            $saveUser = User::updateOrCreate([
                'provider_id' => $user->getId(),
            ], [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Hash::make('Sphoton123'),
                'role' => 'student',
            ]);

            Auth::login($saveUser);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
