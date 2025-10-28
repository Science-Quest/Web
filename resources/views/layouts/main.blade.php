<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Science Quest - @yield('title', 'Home')</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine.js (untuk menu mobile) -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
</head>

<body class="font-sans bg-[#F7FBFF] text-gray-800">
  
  <!-- ================== NAVBAR ================== -->
  <div class="w-full flex justify-center bg-transparent pt-6">
    <nav 
      x-data="{ open: false }"
      class="fixed top-4 left-1/2 -translate-x-1/2 w-[95%] md:w-[90%] lg:w-[95%]
             bg-[#45C3FF] text-white rounded-2xl shadow-lg px-5 md:px-8 
             h-16 md:h-20 flex items-center justify-between z-50 transition-all duration-300">

      <!-- Logo -->
      <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-10 md:h-12 object-contain">
        <span class="hidden sm:inline text-lg md:text-xl font-bold tracking-wide">Science Quest</span>
      </a>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex flex-1 justify-center items-center gap-10 lg:gap-14 font-semibold">
        <li><a href="{{ url('/') }}" class="hover:opacity-80 transition">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:opacity-80 transition">Tentang Kami</a></li>
        <li><a href="{{ route('contact') }}" class="hover:opacity-80 transition">Kontak</a></li>
      </ul>

      <!-- Auth Buttons (desktop & tablet) -->
      <div class="hidden md:flex items-center gap-4 font-semibold">
        <a href="#" class="hover:opacity-80 transition">Sign In</a>
        <a href="#" class="bg-white text-[#45C3FF] px-4 py-1.5 rounded-md font-semibold hover:bg-opacity-90 transition">
          Get Started
        </a>
      </div>

      <!-- Hamburger (mobile) -->
      <button 
        @click="open = !open" 
        class="md:hidden text-white focus:outline-none transition-all duration-300">
        <!-- Icon hamburger -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <!-- Icon close -->
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Dropdown mobile -->
      <div 
        x-show="open" 
        x-transition 
        class="absolute top-20 left-0 w-full flex justify-center md:hidden"
        @click.away="open = false">
        <ul class="bg-[#45C3FF] rounded-2xl shadow-lg w-[90%] py-6 flex flex-col items-center gap-4 font-semibold text-white">
          <li><a href="{{ url('/') }}" class="hover:opacity-80">Home</a></li>
          <li><a href="{{ route('about') }}" class="hover:opacity-80">Tentang Kami</a></li>
          <li><a href="{{ route('contact') }}" class="hover:opacity-80">Kontak</a></li>
          <li><a href="#" class="hover:opacity-80">Sign In</a></li>
          <li>
            <a href="#" class="bg-white text-[#45C3FF] px-4 py-1 rounded-md font-semibold hover:bg-opacity-90 transition">
              Get Started
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- ================== MAIN CONTENT ================== -->
  <main class="mt-20">
    @yield('content')
  </main>

  <!-- ================== FOOTER ================== -->
  <footer class="bg-[#45C3FF] text-white py-10">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 items-start text-center md:text-left">
      
      <!-- Logo -->
      <div class="flex flex-col items-center md:items-start space-y-3">
        <img src="{{ asset('img/footer-logo.png') }}" alt="logo" class="w-32 md:w-36">
      </div>

      <!-- Social Media -->
      <div class="flex justify-center md:justify-start space-x-6">
        <a href="https://www.instagram.com/sciencequest.id/" target="_blank" class="bg-white text-[#45C3FF] w-12 h-12 flex items-center justify-center rounded-full hover:opacity-80 transition">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        <a href="mailto:sciencequest@gmail.com"
        class="bg-white text-[#2199d1] w-12 h-12 flex items-center justify-center rounded-full hover:opacity-80 transition">
            <i class="fas fa-envelope text-xl"></i>
        </a>
      </div>

      <!-- Company -->
      <div>
        <h3 class="font-bold mb-3">Company</h3>
        <ul class="space-y-2 text-sm text-gray-100">
          <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h3 class="font-bold mb-3">Support</h3>
        <ul class="space-y-2 text-sm text-gray-100">
          <li><a href="{{ route('contact') }}" class="hover:underline">FAQ</a></li>
          <li><a href="https://wa.me/085156504046" class="hover:underline">Call Center</a></li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-10 text-center text-sm text-gray-100">
      © 2025 All Rights Reserved.
    </div>
  </footer>

</body>
</html>