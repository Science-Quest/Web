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
        Log::info('Google callback triggered');

        try {
            $googleUser = Socialite::driver('google')->user();
            Log::info('Google user data:', [
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
            ]);

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
                Log::info('User baru dibuat:', ['email' => $user->email]);
            }

            Auth::login($user);
            Log::info('User berhasil login via Google:', ['email' => $user->email]);

            return redirect('/')->with('success', 'Berhasil login dengan Google!');
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('/register')->with('error', 'Gagal login dengan Google.');
        }
    }
}
