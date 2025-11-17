<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile', [
            'user' => Auth::guard('web')->user()
        ]);
    }

    public function updateUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:20|unique:users,username,' . Auth::id()
        ]);

        $user = Auth::user();
        $user->username = $request->username;
        $user->save();

        return back()->with('success', 'Username berhasil diperbarui.');
    }


    public function updateInfo(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:15',
            'gender'  => 'nullable|string',
            'birthdate' => 'nullable|date'
        ]);

        $user = Auth::guard('web')->user();
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->save();

        return back()->with('success', 'Data pribadi berhasil diperbarui.');
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::guard('web')->user();

        Auth::guard('web')->logout();
        $user->delete();

        return redirect('/')->with('success', 'Akun berhasil dihapus.');
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $user = Auth::user();

        // Hapus avatar lama jika ada
        if ($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))) {
            unlink(storage_path('app/public/' . $user->avatar));
        }

        // Upload baru
        $path = $request->file('avatar')->store('avatars', 'public');

        $user->avatar = $path;
        $user->save();

        return back()->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function personalData()
    {
        return view('user.personal-data', [
            'user' => Auth::user()
        ]);
    }

    public function updatePersonalData(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'birth_date' => 'nullable|date',
        ]);

        $user = auth()->user();

        // hanya validate unique jika email berubah
        if ($request->email !== $user->email) {
            $request->validate([
                'email' => 'required|email|unique:users,email',
            ]);
        }

        $user->email = $request->email;
        $user->name = $request->name;
        $user->birth_date = $request->birth_date;
        $user->save();

        return back()->with('success', 'Data berhasil diperbarui!');
    }
}
