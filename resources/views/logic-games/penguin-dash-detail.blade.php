@extends('layouts.game') {{-- kalau pakai layout utama --}}

@section('title', 'Penguin Dash')

@section('content')
<div class="min-h-screen bg-[#F3FAFF] flex flex-col">



  <!-- Back button -->
  <div class="px-4 py-3">
    <a href="" class="text-[#45C3FF]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 19l-7-7 7-7"/>
      </svg>
    </a>
  </div>

  <!-- Game Detail -->
  <div class="flex flex-col items-center px-6">
    <img src="{{ asset('img/pinguinDash.png') }}" alt="Penguin Dash" class="w-28 h-28 object-contain">
    <h2 class="text-xl font-bold mt-2 text-[#163357]">Penguin Dash</h2>
  </div>

<!-- Levels -->
<div class="mt-6 px-6">
  <h3 class="font-bold text-[#163357]">Levels</h3>

  <div class="flex gap-6 mt-2">
    <!-- Level 1 (aktif/play) -->
    <div class="flex flex-col items-center">
      <button class="w-12 h-12 flex items-center justify-center bg-[#45C3FF] text-white rounded-full">
        <i class="fas fa-play text-lg"></i>
      </button>
      <span class="mt-1 text-sm font-semibold">1</span>
    </div>

    <!-- Level 2 (locked) -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 flex items-center justify-center bg-[#D9EBF9] rounded-full">
        <i class="fas fa-lock text-[#7BAFD4] text-lg"></i>
      </div>
      <span class="mt-1 text-sm font-semibold text-[#7BAFD4]">2</span>
    </div>

    <!-- Level 3 (locked) -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 flex items-center justify-center bg-[#D9EBF9] rounded-full">
        <i class="fas fa-lock text-[#7BAFD4] text-lg"></i>
      </div>
      <span class="mt-1 text-sm font-semibold text-[#7BAFD4]">3</span>
    </div>

    <div class="flex flex-col items-center">
      <div class="w-12 h-12 flex items-center justify-center bg-[#D9EBF9] rounded-full">
        <i class="fas fa-lock text-[#7BAFD4] text-lg"></i>
      </div>
      <span class="mt-1 text-sm font-semibold text-[#7BAFD4]">4</span>
    </div>

    <div class="flex flex-col items-center">
      <div class="w-12 h-12 flex items-center justify-center bg-[#D9EBF9] rounded-full">
        <i class="fas fa-lock text-[#7BAFD4] text-lg"></i>
      </div>
      <span class="mt-1 text-sm font-semibold text-[#7BAFD4]">5</span>
    </div>

    <!-- dst sesuai jumlah level -->
  </div>
</div>

<!-- Mode Game -->
<div class="mt-6 px-6">
  <h3 class="font-bold text-[#163357]">Mode game</h3>
  <div class="mt-2 bg-[#E8F5FF] rounded-xl p-4 flex items-start gap-3">
    <div class="w-15 h-10 bg-[#45C3FF] rounded-full flex items-center justify-center text-white">
      <i class="fas fa-stopwatch"></i>
    </div>
    <div>
      <h4 class="font-bold">Waktu terbatas</h4>
      <p class="text-sm text-gray-600">Level harus diselesaikan sebelum batas waktu yang ditentukan.</p>
    </div>
  </div>
</div>

<!-- Hal yang akan diuji -->
<div class="mt-6 px-6">
  <h3 class="font-bold text-[#163357]">Hal yang akan diuji</h3>

  <div class="mt-2 bg-[#E8F5FF] rounded-xl p-4 flex items-start gap-3">
    <div class="w-15 h-10 bg-[#45C3FF] rounded-full flex items-center justify-center text-white">
      <i class="fas fa-stopwatch"></i>
    </div>
    <div>
      <h4 class="font-bold">Hitung Cepat</h4>
      <p class="text-sm text-gray-600">Level harus diselesaikan sebelum batas waktu yang ditentukan.</p>
    </div>
  </div>

  <div class="mt-2 bg-[#E8F5FF] rounded-xl p-4 flex items-start gap-3">
    <div class="w-10 h-10 bg-[#45C3FF] rounded-full flex items-center justify-center text-white">
      <i class="fas fa-plus"></i>
    </div>
    <div>
      <h4 class="font-bold">Penjumlahan dan Pengurangan</h4>
      <p class="text-sm text-gray-600">Melatih 2 dari operasi dasar matematika.</p>
    </div>
  </div>
</div>


<!-- Button Mulai -->
<div class="fixed bottom-4 left-0 w-full px-6">
  <div class="bg-white rounded-2xl shadow-lg p-2">
    <button class="w-full bg-[#45C3FF] text-white py-3 rounded-full font-bold text-lg hover:bg-[#3aaae5] transition">
      Mulai
    </button>
  </div>
</div>

</div>
@endsection
