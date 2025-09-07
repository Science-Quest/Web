@extends('layouts.games')

@section('title', 'Logika')

@section('content')
    
<!-- Back button & Title -->
<div class="px-4 py-4 flex items-center gap-4">
  <a href="#" class="text-2xl">←</a>
  <div>
    <h2 class="text-xl font-bold flex items-center gap-2">
      {{-- <img src="https://cdn-icons-png.flaticon.com/512/1161/1161388.png" alt="icon" class="w-6 h-6"> --}}
      Logika
    </h2>
  </div>
</div>

<div class="mt-4">
  <div class="flex justify-center items-center mb-7">
      <img src="{{ asset('img/logic-icon.png') }}" alt="" ckass= "w-24 h-24">
      <p class="text-xl font-semibold ml-1">Logika</p>
  </div>
</div>

<!-- Games Grid -->
<div class="grid grid-cols-2 gap-4 px-4">
  <!-- Game Card -->
<div class="bg-[#F3FAFF] rounded-xl p-2 flex flex-col items-center relative">
  <!-- Badge di pojok kanan atas -->
  <span class="absolute top-2 right-2 bg-white px-3 py-0.5 text-xs font-bold rounded-full shadow">
      0/100
  </span>

  <!-- Gambar -->
  <img src="{{ asset('img/pinguinDash.png') }}" alt="game"
       class="w-24 h-24 rounded-lg object-contain mt-4"/>

  <!-- Judul -->
  <p class="mt-2 text-sm font-semibold">Penguin Dash</p>
</div>


  <div class="bg-[#F3FAFF] rounded-xl p-2 flex flex-col items-center">
    <div class="relative">
      <div class="w-24 h-24 bg-gray-400 rounded-lg"></div>
      <span class="absolute top-1 right-1 bg-white px-2 py-0.5 text-xs font-bold rounded-full shadow">0/100</span>
    </div>
    <p class="mt-2 text-sm font-semibold">Judul Game 1</p>
  </div>

  <div class="bg-[#F3FAFF] rounded-xl p-2 flex flex-col items-center">
    <div class="relative">
      <div class="w-24 h-24 bg-gray-400 rounded-lg"></div>
      <span class="absolute top-1 right-1 bg-white px-2 py-0.5 text-xs font-bold rounded-full shadow">0/100</span>
    </div>
    <p class="mt-2 text-sm font-semibold">Judul Game 1</p>
  </div>

  <div class="bg-[#F3FAFF] rounded-xl p-2 flex flex-col items-center">
    <div class="relative">
      <div class="w-24 h-24 bg-gray-400 rounded-lg"></div>
      <span class="absolute top-1 right-1 bg-white px-2 py-0.5 text-xs font-bold rounded-full shadow">0/100</span>
    </div>
    <p class="mt-2 text-sm font-semibold">Judul Game 1</p>
  </div>
</div>

<!-- Button -->
<!-- Button Fixed -->
<div class="fixed bottom-20 left-0 w-full px-4 z-40">
<button class="w-full bg-[#45C3FF] text-white py-3 rounded-full font-bold hover:bg-[#3aaae5] transition">
  Buka semua quest
</button>
</div>
@endsection



  {{-- <!-- Bottom Navbar -->
  <div class="fixed bottom-0 w-full bg-white border-t flex justify-around items-center py-2">
    <a href="#" class="flex flex-col items-center text-[#45C3FF] font-bold">
      <span>🎮</span>
      <span class="text-xs">Games</span>
    </a>
    <a href="#" class="flex flex-col items-center text-gray-500">
      <span>📊</span>
      <span class="text-xs">Progress</span>
    </a>
    <a href="#" class="flex flex-col items-center text-gray-500">
      <span>🏆</span>
      <span class="text-xs">Leaderboard</span>
    </a>
    <a href="#" class="flex flex-col items-center text-gray-500">
      <span>⚙️</span>
      <span class="text-xs">Pengaturan</span>
    </a>
  </div>

</body>
</html> --}}
