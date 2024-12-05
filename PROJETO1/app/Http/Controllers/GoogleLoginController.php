<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Laravel\Socialite\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class GoogleLoginController extends Controller {
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback() {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate( [
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => $googleUser->token,

        ]);

        Auth::login($user);
        return redirect()->route('/categorias');
    }

    public function logout(Request $request){
        return redirect('/');
    }
}












