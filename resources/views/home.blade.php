<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Science Quest</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-[#F7FBFF] text-gray-800">

<!-- Navbar -->
<div class="w-full flex justify-center bg-gray-100 pt-6">
  <nav class="fixed top-4 left-1/2 -translate-x-1/2 w-[95%] md:w-[90%] lg:w-[95%] 
              bg-[#45C3FF] text-white rounded-2xl shadow-lg px-6 
              h-16 md:h-20 
              flex items-center z-50">
    
    <!-- Logo -->
    <div class="flex items-center gap-2 h-full">
      <img src="{{ asset('img/logo.png') }}" 
           alt="Logo" 
           class="h-full w-auto object-contain">
    </div>

    <!-- Menu Desktop (tengah) -->
    <ul class="hidden md:flex flex-1 justify-center items-center gap-12 font-semibold">
      <li><a href="#">Home</a></li>
      <li><a href="#">Tentang Kami</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>

    <!-- Auth buttons (kanan) -->
    <div class="hidden md:flex items-center gap-4 font-semibold">
      <a href="#">Sign In</a>
      <a href="" class="bg-white text-[#45C3FF] px-4 py-1 rounded-md font-semibold hover:bg-opacity-90 transition">
        Get Started
      </a>
    </div>

    <!-- Hamburger (Mobile) -->
    <div x-data="{ open: false }" class="md:hidden ml-auto">
      <button @click="open = !open" class="text-white focus:outline-none">
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
      <div x-show="open" x-transition class="absolute top-20 left-0 w-full flex justify-center">
        <ul class="bg-[#45C3FF] rounded-2xl shadow-lg w-[90%] py-6 flex flex-col items-center gap-4 font-semibold">
          <li><a href="#">Home</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak</a></li>
          <li><a href="#">Sign In</a></li>
          <li>
            <a href="#register" class="bg-white text-[#45C3FF] px-4 py-1 rounded-md font-semibold hover:bg-opacity-90 transition">
              Get Started
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>


<!-- Padding top biar konten nggak ketiban navbar -->
<div class="pt-20">
  <section class="flex flex-col-reverse md:flex-row justify-between items-center px-6 md:px-16 py-16 bg-gradient-to-r from-white via-[#E9F6FE] to-[#B5E4FB]">
  <div class="max-w-lg text-center md:text-left">
    <h1 class="text-4xl md:text-5xl font-bold text-[#2D9CDB] leading-tight">
      Improve <br/> your mind
    </h1>
    <p class="text-gray-600 mt-4 text-base md:text-lg">
      Do you like quizzes and competition? Let’s find quiz on any topic! <br/>
      Play, share, and study on the app
    </p>
    
    <!-- Button -->
    <a href="#category">
      <button class="mt-6 bg-gradient-to-r from-[#53C2F0] to-[#2D9CDB] text-white font-semibold pl-8 pr-48 py-3 rounded-r-full shadow-lg hover:opacity-90 transition">
        Play Now
      </button>
    </a>
  </div>

  <!-- Hero Image -->
  <div class="mt-10 md:mt-0">
    <img src="{{ asset('img/hero.png') }}" alt="hero" class="w-64 md:w-80 lg:w-96"/>
  </div>
</section>


<!-- About Section -->
<section class="px-6 md:px-16 py-16 bg-gradient-to-r from-[#98DCFF] via-[#E0F4FF] to-white">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <div class="w-full md:w-1/2 flex justify-center">
      <img src="{{ asset('img/about.png') }}" alt="app" class="rounded-lg w-70 md:w-80 lg:w-[350px]"/>
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
</section>


  <!-- Category Section -->
<!-- Category Section -->
<!-- Category Section -->
<section class="px-6 md:px-16 py-16 bg-gradient-to-tr from-white via-[#E9F6FE] to-[#53C2F0] rounded-xl" id="category">
  <h2 class="text-xl md:text-2xl font-bold text-[#2D9CDB] mb-10 text-center md:text-left">
    Pilih Kategori
  </h2>

  <!-- Grid 2 kolom -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 place-items-center">
  {{-- card --}}
  <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
  <div class="h-32 bg-gray-100">
    <img src="{{ asset('img/math.png') }}" 
         alt="math" 
         class="h-full w-full object-cover"/>
  </div>
  <div class="p-4 text-center">
    <h3 class="font-bold text-gray-800">Aritmatika</h3>
    <p class="text-sm text-gray-500 mt-1"></p>
    <a href="https://games.sciencequest.online/games/connect-things/1">
      <button class="mt-3 w-3/4 mx-auto bg-[#53C2F0] text-white font-semibold py-2 rounded-full hover:bg-[#3aabd8] transition block">
        GO
      </button>
    </a>
    <!-- Tombol sedang, simetris -->
  </div>
</div>


  <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
  <div class="h-32 bg-gray-100">
    <img src="{{ asset('img/logic.png') }}" 
         alt="math" 
         class="h-full w-full object-cover"/>
  </div>
  <div class="p-4 text-center">
    <h3 class="font-bold text-gray-800">Logika</h3>
    <p class="text-sm text-gray-500 mt-1"></p>
    
    <!-- Tombol sedang, simetris -->
    <a href="https://games.sciencequest.online/games/connect-things/1">
      <button class="mt-3 w-3/4 mx-auto bg-[#53C2F0] text-white font-semibold py-2 rounded-full hover:bg-[#3aabd8] transition block">
        GO
      </button>
    </a>
  </div>
</div>

  <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
  <div class="h-32 bg-gray-100">
    <img src="{{ asset('img/memori.png') }}" 
         alt="math" 
         class="h-full w-full object-cover"/>
  </div>
  <div class="p-4 text-center">
    <h3 class="font-bold text-gray-800">Memori</h3>
    <p class="text-sm text-gray-500 mt-1"></p>
    <a href="https://games.sciencequest.online/games/box-recall/1">
      <button class="mt-3 w-3/4 mx-auto bg-[#53C2F0] text-white font-semibold py-2 rounded-full hover:bg-[#3aabd8] transition block">
        GO
      </button>
    </a>
    <!-- Tombol sedang, simetris -->
  </div>
</div>

  <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden w-full shadow-sm hover:shadow-md transition">
  <div class="h-32 bg-gray-100">
    <img src="{{ asset('img/biologi.png') }}" 
         alt="math" 
         class="h-full w-full object-cover"/>
  </div>
  <div class="p-4 text-center">
    <h3 class="font-bold text-gray-800">Biologi</h3>
    <p class="text-sm text-gray-500 mt-1"></p>
    
    <!-- Tombol sedang, simetris -->
    <button class="mt-3 w-3/4 mx-auto bg-[#53C2F0] text-white font-semibold py-2 rounded-full hover:bg-[#3aabd8] transition block">
      GO
    </button>
  </div>
</div>





    

  </div>
</section>


<!-- FAQ Section -->
<section class="px-6 md:px-16 py-16 bg-white">
  <h2 class="text-xl md:text-2xl font-bold text-[#2D9CDB] mb-8">FAQ</h2>
  <div class="space-y-4  mx-auto">

    <!-- Item -->
   <!-- FAQ Item -->
<div class="faq-item rounded-lg w-full">
<div class="flex justify-center mt-5" x-data="{ open: false }">
  <div class="w-11/12">

    <!-- Header About -->
    <section class="bg-[#4fc3f7] text-white p-4 rounded-xl flex justify-between items-center">
      <h3 class="text-xl font-normal ml-3">Gimana sih cara mainnya?</h3>
      <button @click="open = !open" class="mr-3">
        <!-- Panah atas/bawah -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd"/>
        </svg>
      </button>
    </section>

    <!-- Konten About -->
    <section x-show="open" x-transition
             class="bg-[#98DCFF] text-white p-6 rounded-b-xl text-sm mx-5 transition ease-in-out">
      Lorem ipsum dolor sit amet. Et aperiam necessitatibus a ducimus soluta a consectetur
      deserunt et quaerat illum aut ipsa illum sed dicta sunt. 33 voluptatem deserunt et
      excepturi sunt et dolores laboriosam!
    </section>

  </div>
</div>


<div class="flex justify-center mt-5" x-data="{ open: false }">
  <div class="w-11/12">

    <!-- Header About -->
    <section class="bg-[#4fc3f7] text-white p-4 rounded-xl flex justify-between items-center">
      <h3 class="text-xl font-normal ml-3">Gimana cara daftarnya?</h3>
      <button @click="open = !open" class="mr-3">
        <!-- Panah atas/bawah -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd"/>
        </svg>
      </button>
    </section>

    <!-- Konten About -->
    <section x-show="open" x-transition
             class="bg-[#98DCFF] text-white p-6 rounded-b-xl text-sm mx-5 transition ease-in-out">
      Lorem ipsum dolor sit amet. Et aperiam necessitatibus a ducimus soluta a consectetur
      deserunt et quaerat illum aut ipsa illum sed dicta sunt. 33 voluptatem deserunt et
      excepturi sunt et dolores laboriosam!
    </section>

  </div>
</div>


<div class="flex justify-center mt-5" x-data="{ open: false }">
  <div class="w-11/12">

    <!-- Header About -->
    <section class="bg-[#4fc3f7] text-white p-4 rounded-xl flex justify-between items-center">
      <h3 class="text-xl font-nomal ml-3">Seberapa lama kita harus menyelesaikan kuisnya?</h3>
      <button @click="open = !open" class="mr-3">
        <!-- Panah atas/bawah -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd"/>
        </svg>
      </button>
    </section>

    <!-- Konten About -->
    <section x-show="open" x-transition
             class="bg-[#98DCFF] text-white p-6 rounded-b-xl text-sm mx-5 transition ease-in-out">
      Lorem ipsum dolor sit amet. Et aperiam necessitatibus a ducimus soluta a consectetur
      deserunt et quaerat illum aut ipsa illum sed dicta sunt. 33 voluptatem deserunt et
      excepturi sunt et dolores laboriosam!
    </section>

  </div>
</div>




<div class="flex justify-center mt-5" x-data="{ open: false }">
  <div class="w-11/12">

    <!-- Header About -->
    <section class="bg-[#4fc3f7] text-white p-4 rounded-xl flex justify-between items-center">
      <h3 class="text-xl font-normal ml-3">Bagaimana caranya mengundang teman untuk ikut bergabung?</h3>
      <button @click="open = !open" class="mr-3">
        <!-- Panah atas/bawah -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5A.75.75 0 015.03 7.72L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd"/>
        </svg>
      </button>
    </section>

    <!-- Konten About -->
    <section x-show="open" x-transition
             class="bg-[#98DCFF] text-white p-6 rounded-b-xl text-sm mx-5 transition ease-in-out">
      Lorem ipsum dolor sit amet. Et aperiam necessitatibus a ducimus soluta a consectetur
      deserunt et quaerat illum aut ipsa illum sed dicta sunt. 33 voluptatem deserunt et
      excepturi sunt et dolores laboriosam!
    </section>

  </div>
</div>


</div>
</section>

  <!-- Footer -->
<footer class="bg-[#45C3FF] text-white py-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 items-start text-center md:text-left">
    
    <!-- Logo + Nama -->
    <div class="flex flex-col items-center md:items-start space-y-3">
      <img src="{{ asset('img/footer-logo.png ')}}" alt="logo" class="w-45 h-48"/>
      
    </div>

    <!-- Social Media -->
<div class="flex justify-center md:justify-start space-x-6">
  <a href="#" class="bg-white text-[#45C3FF] w-12 h-12 flex items-center justify-center rounded-full hover:opacity-80 transition">
    <i class="fab fa-whatsapp text-xl"></i>
  </a>
  <a href="#" class="bg-white text-[#45C3FF] w-12 h-12 flex items-center justify-center rounded-full hover:opacity-80 transition">
    <i class="fab fa-instagram text-xl"></i>
  </a>
  <a href="#" class="bg-white text-[#45C3FF] w-12 h-12 flex items-center justify-center rounded-full hover:opacity-80 transition">
    <i class="fab fa-youtube text-xl"></i>
  </a>
</div>


    <!-- Company -->
    <div>
      <h3 class="font-bold mb-3">Company</h3>
      <ul class="space-y-2 text-sm text-gray-100">
        <li><a href="#" class="hover:underline">About Us</a></li>
        <li><a href="#" class="hover:underline">Events</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div>
      <h3 class="font-bold mb-3">Support</h3>
      <ul class="space-y-2 text-sm text-gray-100">
        <li><a href="#" class="hover:underline">FAQ</a></li>
        <li><a href="#" class="hover:underline">Call Center</a></li>
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
        if(c !== content) {
          c.classList.add('hidden');
        }
      });
      document.querySelectorAll('.faq-item svg').forEach(i => {
        if(i !== icon) {
          i.classList.remove('rotate-180');
        }
      });

      // toggle current
      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });
</script>

</body>
</html>
