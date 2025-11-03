@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="min-h-screen bg-[#F6FBFF] flex flex-col items-center justify-start py-8">

  <!-- Header -->
  <div class="text-center mb-6">
    <h2 class="text-[#002D57] text-2xl font-extrabold mt-2">LOGIN</h2>
    <p class="text-[#617386] text-sm mt-1">Haloo... silakan masuk ke akunmu</p>
  </div>

  <!-- Error Validation -->
  @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 mx-6 mb-4 rounded-lg w-80 shadow-sm">
      <ul class="list-disc pl-5 text-sm">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Form -->
  <form method="POST" action="{{ route('login') }}" 
        class="w-80 bg-white p-6 rounded-3xl shadow-md space-y-4"
        x-data="{ showPassword: false }">
    @csrf

    <!-- Email -->
    <div>
      <label class="block text-sm font-semibold text-[#002D57]">Email</label>
      <input type="email" name="email" required
             placeholder="you@example.com"
             class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 
                    focus:ring-2 focus:ring-[#54B9FF] focus:outline-none">
    </div>

    <!-- Password -->
    <div>
      <label class="block text-sm font-semibold text-[#002D57]">Password</label>
      <div class="relative">
        <input :type="showPassword ? 'text' : 'password'" name="password" required
               placeholder="********"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 
                      focus:ring-2 focus:ring-[#54B9FF] focus:outline-none">
        <!-- Tombol toggle password -->
        <button 
          type="button"
          @click="showPassword = !showPassword"
          class="absolute inset-y-0 right-3 flex items-center text-gray-400 
                 hover:text-[#54B9FF] transition"
        >
          <!-- Mata terbuka -->
          <i x-show="!showPassword" data-lucide="eye" class="w-5 h-5"></i>
          <!-- Mata dicoret -->
          <i x-show="showPassword" data-lucide="eye-off" class="w-5 h-5"></i>
        </button>
      </div>
    </div>

    <!-- Tombol Login -->
    <button type="submit"
            class="w-full bg-[#2FA8FF] text-white font-bold py-2 rounded-lg mt-4 
                   hover:bg-[#1E96E1] transition">
      LOGIN
    </button>

    <div class="text-center text-gray-500 text-sm mt-3">atau</div>

    <!-- Login dengan Google -->
    <a href="{{ route('auth.google') }}" 
       class="flex items-center justify-center border py-2 rounded-lg 
              hover:bg-gray-50 transition">
      <img src="https://www.svgrepo.com/show/475656/google-color.svg" 
           class="w-5 h-5 mr-2" alt="Google">
      <span class="text-sm font-semibold text-gray-700">Login dengan Google</span>
    </a>

    <!-- Daftar -->
    <p class="text-center text-sm text-gray-600 mt-4">
      Belum punya akun?
      <a href="{{ route('register') }}" 
         class="text-[#FF5C00] font-semibold hover:underline">
        Daftar disini
      </a>
    </p>
  </form>
</div>
@endsection
