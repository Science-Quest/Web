@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div 
  x-data="{ step: 1, showPassword: false, showConfirm: false }" 
  class="min-h-screen bg-[#F6FBFF] flex flex-col items-center justify-start py-8">

  <!-- Header -->
  <div class="relative text-center">
    <h2 class="text-[#002D57] text-2xl font-extrabold mt-2">REGISTER</h2>
    <p class="text-[#617386] text-sm mt-1">Haloo... masukkan kredensialmu</p>

    <!-- Progress Bar -->
    <div class="flex justify-center items-center gap-2 mt-3">
      <div class="w-24 h-2 rounded-full transition-all duration-500"
           :class="step >= 1 ? 'bg-[#2FA8FF]' : 'bg-gray-300'"></div>
      <div class="w-24 h-2 rounded-full transition-all duration-500"
           :class="step >= 2 ? 'bg-[#2FA8FF]' : 'bg-gray-300'"></div>
    </div>
  </div>

  <!-- Error Validation -->
  @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 mx-6 mt-4 rounded-lg w-80">
      <ul class="list-disc pl-5 text-sm">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Form -->
  <form method="POST" action="{{ route('register') }}" 
        class="w-80 mt-6 space-y-4 bg-white p-6 rounded-3xl shadow-md">
    @csrf

    <!-- Step 1 -->
    <div x-show="step === 1" x-transition>
      <div>
        <label class="text-[#002D57] font-semibold">Username</label>
        <input type="text" name="username" required 
               class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#54B9FF] focus:outline-none">
      </div>

<!-- Password -->
<div class="mt-3">
  <label class="text-[#002D57] font-semibold">Password</label>
  <div class="relative">
    <input 
      :type="showPassword ? 'text' : 'password'" 
      name="password" 
      required
      class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 
             focus:ring-2 focus:ring-[#54B9FF] focus:outline-none"
    >
    <!-- Tombol toggle password -->
    <button 
      type="button"
      @click="showPassword = !showPassword"
      class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 
             hover:text-[#54B9FF] transition"
    >
      <!-- Mata terbuka -->
      <i x-show="!showPassword" data-lucide="eye" class="w-5 h-5"></i>
      <!-- Mata dicoret -->
      <i x-show="showPassword" data-lucide="eye-off" class="w-5 h-5"></i>
    </button>
  </div>
</div>

<!-- Konfirmasi Password -->
<div class="mt-3">
  <label class="text-[#002D57] font-semibold">Konfirmasi Password</label>
  <div class="relative">
    <input 
      :type="showConfirm ? 'text' : 'password'" 
      name="password_confirmation" 
      required
      class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 
             focus:ring-2 focus:ring-[#54B9FF] focus:outline-none"
    >
    <!-- Tombol toggle konfirmasi password -->
    <button 
      type="button"
      @click="showConfirm = !showConfirm"
      class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 
             hover:text-[#54B9FF] transition"
    >
      <!-- Mata terbuka -->
      <i x-show="!showConfirm" data-lucide="eye" class="w-5 h-5"></i>
      <!-- Mata dicoret -->
      <i x-show="showConfirm" data-lucide="eye-off" class="w-5 h-5"></i>
    </button>
  </div>
</div>


      <button type="button" @click="step = 2"
              class="w-full bg-[#2FA8FF] text-white font-bold py-2 rounded-lg mt-5 hover:bg-[#1E96E1] transition">
        LANJUTKAN
      </button>

      <div class="text-center text-gray-500 text-sm mt-3">atau</div>

      <a href="{{ route('auth.google') }}" 
         class="flex items-center justify-center border py-2 rounded-lg mt-2 hover:bg-gray-50 transition">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2">
        <span class="text-sm font-semibold text-gray-700">Sign Up With Google</span>
      </a>
    </div>

    <!-- Step 2 -->
    <div x-show="step === 2" x-transition>
      <div>
        <label class="text-[#002D57] font-semibold">Tanggal lahir</label>
        <input type="date" name="birth_date"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#54B9FF] focus:outline-none">
      </div>

      <div class="mt-3">
        <label class="text-[#002D57] font-semibold">Email 
          <span class="text-gray-500 text-sm">(direkomendasikan)</span></label>
        <input type="email" name="email"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#54B9FF] focus:outline-none">
      </div>

      <button type="submit" 
              class="w-full bg-[#2FA8FF] text-white font-bold py-2 rounded-lg mt-5 hover:bg-[#1E96E1] transition">
        REGISTER
      </button>

      <p class="text-center text-sm text-gray-600 mt-2">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-[#FF5C00] font-semibold hover:underline">
          Login disini
        </a>
      </p>

      <button type="button" @click="step = 1"
              class="w-full bg-[#E8F5FF] text-[#002D57] font-semibold py-2 rounded-xl mt-3 flex items-center justify-center gap-2 hover:bg-[#D9EEFF] transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        Kembali
      </button>
    </div>
  </form>
</div>
@endsection
