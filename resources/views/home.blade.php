<!DOCTYPE html>

<html lang="en">

<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Science Quest</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  @livewireStyles
</head>

<body class="font-sans bg-[#eef6fa] text-gray-800">
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


  <!-- Padding top biar konten nggak ketiban navbar -->
  <div class="pt-20">
    <section
      class="flex flex-col-reverse md:flex-row justify-between items-center px-6 md:px-16 py-16 bg-gradient-to-r from-[#f7f9fa] via-[#e4eef5] to-[#b5e9ff]">
      <div class="animate-fade-in-left text-center md:text-left ">
        <h1 class="text-3xl md:text-4xl font-bold text-[#2D9CDB] mb-8 leading-tight">
          Main sambil BELAJAR? <br /> Mana bisa?
        </h1>
        <p class="font-bold ">Bisa dong!</p>
        <p class="text-gray-600 mt-4 text-base md:text-lg">
          Di ScienceQuest, kamu akan diberikan berbagai macam game yang melingkupi banyak topik
          pembelajaran
        </p>

        <!-- Button -->
        <button
          class="min-w-sm h-[64px] mt-6 bg-gradient-to-r from-[#53C2F0] to-[#2D9CDB] text-white text-left text-xl font-bold pl-8 py-3 rounded-r-full shadow-lg hover:opacity-90 transition"
          onclick="document.getElementById('categories').scrollIntoView({behavior:'smooth'});">
          MAINKAN SEKARANG !
        </button>
      </div>

      <!-- Hero Image -->
      <div class="mt-10 md:mt-0">
        <img src="{{ asset('img/hero.png') }}" alt="hero" class="w-64 md:w-80 lg:w-96" />
      </div>
    </section>


    <!-- Category Section -->
    <section id="categories" class="px-6 md:px-16 py-16 bg-gradient-to-tr from-[#ebf7fc] via-[#E9F6FE] to-[#53C2F0]">
      <h2 class="text-3xl md:text-4xl font-bold text-[#2D9CDB] mb-10 text-center md:text-left">
        Pilih Kategori
      </h2>

      <!-- Grid 2 kolom -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 place-items-center items-stretch">
        {{-- card --}}
        <div
          class=" animate-fade-in-left bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
          <div class="h-32 bg-gray-100">
            <img src="{{ asset('img/math.png') }}" alt="math" class="h-full w-full object-cover" />
          </div>
          <div id="card-description-aritmatika" class="p-4 text-center flex flex-col justify-between h-68">
            <div>
              <h3 class="font-bold text-gray-800">Aritmatika</h3>
              <p class="text-sm text-gray-500 mt-1">Belajar +, -, :, x jadi seru</p>
            </div>
            <div>
              <p class="font-bold mt-4 mb-2 text-sm">Game: Penguin Dash</p>
              <livewire:level-selector game="penguin-dash" />
            </div>
          </div>
        </div>


        <div
          class=" animate-fade-in-left bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
          <div class="h-32 bg-gray-100">
            <img src="{{ asset('img/logic.png') }}" alt="math" class="h-full w-full object-cover" />
          </div>
          <div id="card-description-logika" class="p-4 text-center flex flex-col justify-between h-68">
            <div>
              <h3 class="font-bold text-gray-800">Logika</h3>
              <p class="text-sm text-gray-500 mt-1">Latih logikamu dengan games yang akan menguras otak</p>
            </div>
            <div>
              <p class="font-bold mt-4 mb-2 text-sm">Game: Connect Things</p>
              <livewire:level-selector game="connect-things" />
            </div>
          </div>
        </div>


        <div
          class=" animate-fade-in-left bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
          <div class="h-32 bg-gray-100">
            <img src="{{ asset('img/memori.png') }}" alt="math" class="h-full w-full object-cover" />
          </div>

          <div id="card-description-memori" class="p-4 text-center flex flex-col justify-between h-68">
            <div>
              <h3 class="font-bold text-gray-800">Memori</h3>
              <p class="text-sm text-gray-500 mt-1">Latih daya ingatanmu dengan games yang menarik</p>
            </div>
            <div>
              <p class="font-bold mt-4 mb-2 text-sm">Game: Box Recall</p>
              <livewire:level-selector game="box-recall" />
            </div>
          </div>

        </div>

        <div
          class="relative animate-fade-in-left  bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">

          <div class="absolute z-20 rounded-lg p-4 -translate-1/2 top-1/2 left-1/2 bg-white">
            <img class="relative -top-2" src="{{ asset('img/under-construction.png') }}"
              alt="This section is still under construction">
            <p class="text-center text-sm">Maaf, topik ini masih dalam tahap pengembangan</p>
          </div>

          <div class="absolute z-10 bg-black opacity-30 w-full h-full">
          </div>

          <div class="h-32 bg-gray-100">
            <img src="{{ asset('img/biologi.png') }}" alt="math" class="h-full w-full object-cover" />
          </div>

          <div id="card-description-biologi" class=" p-4 text-center flex flex-col justify-between h-68">
            <div>
              <h3 class="font-bold text-gray-800">Biologi</h3>
              <p class="text-sm text-gray-500 mt-1">Perluas pengetahuan alam mu</p>
            </div>
            <div>
              <p class="font-bold mt-4 mb-2 text-sm">Game: Symbiosis</p>
              <livewire:level-selector game="symbiosis" />
            </div>
          </div>
        </div>

      </div>
    </section>

    {{-- <!-- About Section -->
    <section class="px-6 md:px-16 py-16 bg-gradient-to-r from-[#4fc3f7] via-[#E0F4FF] to-white">
      <div class="flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2 flex justify-center">
          <img src="{{ asset('img/about.png') }}" alt="app" class="rounded-lg w-70 md:w-80 lg:w-[350px]" />
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left">
          <h2 class="text-2xl md:text-3xl font-bold text-[#2D9CDB]">SIAP UNTUK BERMAIN?</h2>
          <p class="mt-4 text-[#2D9CDB] font-semibold">MAINkan permainan, belajar, menang, kumpulkan poin</p>
          <p class="mt-4 text-gray-600 leading-relaxed">
            Science Quest adalah platform game edukasi berbasis website seru yang dirancang untuk anak SD dan SMP!
            Dengan berbagai pilihan game yang menyenangkan, anak-anak bisa belajar logika, aritmatika, biologi, kuantum,
            dan banyak lagi, sambil bermain.
          </p>
        </div>
      </div>
    </section> --}}

    <!-- FAQ Section -->
    <section id="FAQ" class="px-6 mb-16 md:px-16 py-16 bg-[#eef6fa]">
      <h2 class="text-xl md:text-2xl font-bold text-[#2D9CDB] mb-8">FAQ</h2>
      <div class="mx-auto">

        <!-- Item -->
        <!-- FAQ Item -->
        <div class="faq-item flex flex-col gap-y-6  rounded-lg w-full">
          <div class="flex justify-center mt-5" x-data="{ open: false }" @click="open = !open">
            <div class="w-11/12">

              <!-- Header About -->
              <section class="bg-[#20B4FF] text-white p-4 rounded-xl flex justify-between items-center">
                <h3 class="text-xl font-normal ml-3">Gimana sih cara mainnya?</h3>
                <button class="mr-3">
                  <!-- Panah atas/bawah -->
                  <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                      clip-rule="evenodd" />
                  </svg>
                  <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </section>

              <!-- Konten About -->
              <section x-show="open" x-transition x-cloak
                class="bg-[#78d2fc] font-semibold text-white p-6 rounded-b-xl mx-5 transition ease-in-out">
                Pada bagian kategori, klik tombol Go akan membawamu pergi ke halaman game
              </section>

            </div>
          </div>


          <div class="flex justify-center mt-5" x-data="{ open: false }" @click="open = !open">
            <div class="w-11/12">

              <!-- Header About -->
              <section class="bg-[#20B4FF] text-white p-4 rounded-xl flex justify-between items-center">
                <h3 class="text-xl font-normal ml-3">Gimana cara daftarnya?</h3>
                <button class="mr-3">
                  <!-- Panah atas/bawah -->
                  <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                      clip-rule="evenodd" />
                  </svg>
                  <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </section>

              <!-- Konten About -->
              <section x-show="open" x-transition x-cloak
                class="bg-[#78d2fc] text-white font-semibold p-6 rounded-b-xl mx-5 transition ease-in-out">
                Saat ini Science Quest masih dalam pengembangan aplikasi utama. Pantau terus ya
              </section>

            </div>
          </div>


          <div class="flex justify-center mt-5" x-data="{ open: false }" @click="open = !open">
            <div class="w-11/12">
              <img src="" srcset="">
              <!-- Header About -->
              <section class="bg-[#20B4FF] text-white p-4 rounded-xl flex justify-between items-center">
                <h3 class="text-xl font-nomal ml-3">Seberapa lama kita harus menyelesaikan setiap level?</h3>
                <button class="mr-3">
                  <!-- Panah atas/bawah -->
                  <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                      clip-rule="evenodd" />
                  </svg>
                  <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </section>

              <!-- Konten About -->
              <section x-show="open" x-transition x-cloak
                class="bg-[#78d2fc] text-white font-semibold p-6 rounded-b-xl  mx-5 transition ease-in-out">
                Ada beberapa level yang dibatasi waktu dan ada yang tidak. Setiap level bervariasi untuk batas waktunya.
              </section>

            </div>
          </div>

          <div class="flex justify-center mt-5" x-data="{ open: false }" @click="open = !open">
            <div class="w-11/12">

              <!-- Header About -->
              <section class="bg-[#20B4FF] text-white p-4 rounded-xl flex justify-between items-center">
                <h3 class="text-xl font-normal ml-3">Bagaimana caranya mengundang teman untuk ikut bergabung?</h3>
                <button class="mr-3">
                  <!-- Panah atas/bawah -->
                  <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                      clip-rule="evenodd" />
                  </svg>
                  <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </section>

              <!-- Konten About -->
              <section x-show="open" x-transition x-cloak
                class="bg-[#78d2fc] text-white font-semibold p-6 rounded-b-xl mx-5 transition ease-in-out">
                Saat ini Science Quest masih dalam pengembangan aplikasi utama. Untuk sekarang, kamu bisa undang teman -
                temanmu untuk ikut mencoba Science Quest versi demo dahulu
              </section>

            </div>
          </div>


        </div>
    </section>

    <!-- Footer -->
  <footer class="bg-[#20B4FF] text-white py-10">
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

  </div>

  <!-- Hero Section -->

  <!-- Script Accordion -->
  <script>
    document.querySelectorAll('.faq-item button').forEach(button => {
      button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        const content = faqItem.querySelector('.faq-content');
        const icon = button.querySelector('svg');

        // close others
        document.querySelectorAll('.faq-content').forEach(c => {
          if (c !== content) {
            c.classList.add('hidden');
          }
        });
        document.querySelectorAll('.faq-item svg').forEach(i => {
          if (i !== icon) {
            i.classList.remove('rotate-180');
          }
        });

        // toggle current
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll(".animate-fade-in-left");

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry.target); // run only once
          }
        });
      }, { threshold: 0.2 }); // trigger when 20% is visible

      elements.forEach(el => observer.observe(el));
    });
  </script>
  @livewireScripts
</body>

</html>