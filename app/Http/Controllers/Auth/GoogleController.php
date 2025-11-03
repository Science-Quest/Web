<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Log;


class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {

            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'id' => Str::uuid(),
                    'username' => Str::slug($googleUser->getName()) . '_' . Str::random(4),
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt(Str::random(16)),
                ]);
            }



            Auth::login($user);
            return redirect('/')->with('success', 'Berhasil login dengan Google!');
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('/register')->with('error', 'Gagal login dengan Google.');
        }
    }
}
