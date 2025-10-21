@extends('layouts.main')

@section('title', 'Tentang Kami')
@section('content')

<!-- Section Hero -->
<section class="bg-gradient-to-r from-[#5BC8FF] via-[#BDE9FF] to-white py-16">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="flex justify-center md:w-1/2">
            <img src="{{ asset('img/about.png') }}" alt="Science Quest" class="w-[300px] md:w-[400px] drop-shadow-lg">
        </div>
        <div class="md:w-1/2 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#42BFFF] mb-4 font-family-poppins">SIAP UNTUK BERMAIN?</h2>
            <p class="text-[#42BFFF] font-semibold mb-6">MAINKAN PERMAINAN, BELAJAR, MENANG, KUMPULKAN POIN</p>
            <p class="text-gray-700 leading-relaxed">
                Science Quest adalah platform game edukasi berbasis website seru yang dirancang untuk anak SD dan SMP!
                Dengan berbagai pilihan game yang menyenangkan, anak-anak bisa belajar logika, aritmatika, biologi, kuantum,
                dan banyak lagi, sambil bermain.
            </p>
        </div>
    </div>
</section>

<!-- Section Visi -->
<section class="bg-gradient-to-r from-[#BDE9FF] via-[#9CDBFF] to-[#5BC8FF] py-16">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="md:w-2/3">
            <h2 class="text-2xl font-bold text-[#20B4FF] mb-6">VISI</h2>
            <p class="text-3xl font-extrabold text-[#20B4FF] leading-snug">
                "Menjadi Platform #1 Yang Bikin Belajar Seru!" <br>
                <span class="font-medium text-[#20B4FF]">
                    Menciptakan generasi cerdas Indonesia melalui pembelajaran digital yang fun dan interaktif.
                </span>
            </p>
        </div>
        <div class="md:w-1/3 flex flex-col items-center">
            <img src="{{ asset('img/fatir.png') }}" alt="Ketua Tim" class="w-60 rounded-xl shadow-lg mb-4">
            <h3 class="text-lg font-bold text-gray-900">Fatir El Taslem</h3>
            <p class="text-sm text-gray-500">Ketua Tim</p>
        </div>
    </div>
</section>

<!-- Section Misi -->
<section class="bg-gradient-to-r from-[#5BC8FF] via-[#BDE9FF] to-white py-16">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-10">
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('img/team.png') }}" alt="Tim Science Quest" class="w-[320px] md:w-[420px] rounded-xl shadow-lg">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-2xl font-bold text-blue-600 mb-6">MISI</h2>
            <p class="text-[#47BDF9] text-lg font-semibold leading-relaxed">
                Pembelajaran Jadi Game Seru — Matematika, Logika, Biologi dikemas dalam game yang bikin ketagihan belajar. 
                Belajar Fleksibel 24/7 — Akses materi kapan saja, di mana saja - cocok untuk siswa SD & SMP. 
                Motivasi Lewat Reward — Sistem poin dan badge yang bikin anak semangat belajar mandiri. 
                Teknologi Terdepan — Platform canggih yang mudah digunakan dan selalu update. 
                Bentuk Karakter Juara — Asah kemampuan akademis sekaligus skill problem solving.
            </p>
        </div>
    </div>
</section>

@endsection
