<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Socialite;
use Auth;
use Session;

class LineLoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('line')->redirect();
    }

    public function handleProviderCallback()
    {
        $lineUser = Socialite::driver('line')->user();
        
        $user = User::where('line_id', '=', $lineUser->id)->first();
        if ($user != null) {
            Auth::login($user);
        } else {
            Session::put('lineUser', $lineUser);
            return redirect('register');
        }
        return redirect('home');
    }
}
