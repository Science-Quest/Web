<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:4|max:20|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)],
            'birth_date' => 'nullable|date',
        ]);

        $user = User::create([
            'id' => Str::uuid(),
            'username' => $validated['username'],
            'email' => $validated['email'],
            'birth_date' => $validated['birth_date'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);
        return redirect('/')->with('success', 'Akun berhasil dibuat!');
    }
}
