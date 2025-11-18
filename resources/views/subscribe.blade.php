@extends('layouts.main')

@section('title', 'Science Quest - Berlangganan')

@section('content')

    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all .7s ease-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .hover-float:hover {
            transform: translateY(-8px);
            transition: .3s ease;
        }
    </style>

    <div class="bg-[#45C3FF] min-h-screen w-full py-10 sm:py-12 md:py-16 px-4 sm:px-6 md:px-10">

        <!-- Hero -->
        <div class="text-center text-white mb-12 sm:mb-14 md:mb-16 fade-in">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 drop-shadow-lg">
                🎓 Tingkatkan Pembelajaran Anda!
            </h1>
            <p class="text-base sm:text-lg opacity-95">
                Pilih paket yang sesuai dengan kebutuhan belajar Anda
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 mb-14 md:mb-16 fade-in">

            <!-- Freemium -->
            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-7 md:p-8 hover-float transition">
                <h3 class="text-xl sm:text-2xl font-bold mb-2 text-slate-800">Freemium Model</h3>
                <p class="text-slate-500 text-sm sm:text-base mb-4">Sempurna untuk memulai perjalanan belajar Anda</p>
                <div class="text-3xl sm:text-4xl font-bold text-[#45C3FF] mb-1">Gratis</div>
                <div class="text-slate-400 mb-6 text-sm sm:text-base">Selamanya</div>

                <ul class="space-y-2 sm:space-y-3 mb-6 text-sm sm:text-base">
                    <li class="flex items-center gap-2">✓ Akses gratis untuk fitur dasar</li>
                    <li class="flex items-center gap-2">✓ Dukungan iklan</li>
                    <li class="flex items-center gap-2">✓ Materi pembelajaran standar</li>
                    <li class="flex items-center gap-2">✓ Penyebaran produk yang luas</li>
                    <li class="flex items-center gap-2">✓ Game Aritmetika & Logika</li>
                </ul>

                <button
                    class="w-full py-2.5 sm:py-3 bg-[#54B9FF] hover:bg-[#3fa4ea] text-white font-semibold sm:font-bold rounded-xl transition text-sm sm:text-base">
                    Mulai Gratis
                </button>
            </div>

            <!-- Premium Bulanan -->
            <div
                class="relative bg-white border-2 border-rose-400 rounded-2xl shadow-xl p-6 sm:p-7 md:p-8 hover-float transition">
                <div
                    class="absolute top-3 sm:top-4 right-[-22px] sm:right-[-30px] rotate-45 bg-rose-500 text-white py-1 px-6 sm:px-8 text-[10px] sm:text-xs font-bold shadow">
                    POPULER
                </div>

                <h3 class="text-xl sm:text-2xl font-bold mb-2 text-slate-800">Premium Bulanan</h3>
                <p class="text-slate-500 text-sm sm:text-base mb-4">Fleksibel dan terjangkau untuk belajar intensif</p>
                <div class="text-3xl sm:text-4xl font-bold text-[#54B9FF] mb-1">Rp30.000</div>
                <div class="text-slate-400 mb-6 text-sm sm:text-base">Per bulan</div>

                <ul class="space-y-2 sm:space-y-3 mb-6 text-sm sm:text-base">
                    <li class="flex items-center gap-2">✓ Semua fitur Freemium</li>
                    <li class="flex items-center gap-2">✓ Tanpa iklan</li>
                    <li class="flex items-center gap-2">✓ Akses semua kategori game</li>
                    <li class="flex items-center gap-2">✓ Power-ups dalam aplikasi</li>
                    <li class="flex items-center gap-2">✓ Avatar kustomisasi</li>
                    <li class="flex items-center gap-2">✓ Sertifikat pembelajaran</li>
                    <li class="flex items-center gap-2">✓ Prioritas dukungan</li>
                </ul>

                <button
                    class="w-full py-2.5 sm:py-3 bg-[#54B9FF] hover:bg-[#3fa4ea] text-white font-semibold sm:font-bold rounded-xl transition text-sm sm:text-base">
                    Berlangganan Bulanan
                </button>
            </div>

            <!-- Premium Tahunan -->
            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-7 md:p-8 hover-float transition">
                <h3 class="text-xl sm:text-2xl font-bold mb-2 text-slate-800">Premium Tahunan</h3>
                <p class="text-slate-500 text-sm sm:text-base mb-4">Hemat 17% dengan komitmen jangka panjang</p>
                <div class="text-3xl sm:text-4xl font-bold text-[#54B9FF] mb-1">Rp300.000</div>
                <div class="text-slate-400 mb-6 text-sm sm:text-base">Per tahun (Rp25.000/bulan)</div>

                <ul class="space-y-2 sm:space-y-3 mb-6 text-sm sm:text-base">
                    <li class="flex items-center gap-2">✓ Semua fitur Premium Bulanan</li>
                    <li class="flex items-center gap-2">✓ Hemat Rp60.000 per tahun</li>
                    <li class="flex items-center gap-2">✓ Konten eksklusif premium</li>
                    <li class="flex items-center gap-2">✓ Akses early bird fitur baru</li>
                    <li class="flex items-center gap-2">✓ Hadiah spesial tahunan</li>
                    <li class="flex items-center gap-2">✓ Bonus power-ups bulanan</li>
                    <li class="flex items-center gap-2">✓ Laporan progress detail</li>
                </ul>

                <button
                    class="w-full py-2.5 sm:py-3 bg-[#54B9FF] hover:bg-[#3fa4ea] text-white font-semibold sm:font-bold rounded-xl transition text-sm sm:text-base">
                    Berlangganan Tahunan
                </button>
            </div>

        </div>

        <!-- Comparison Table -->
        <div class="bg-white rounded-2xl shadow-xl p-5 sm:p-6 md:p-8 mb-14 md:mb-16 overflow-x-auto fade-in">

            <h2 class="text-2xl sm:text-3xl font-bold text-center text-slate-800 mb-6 sm:mb-8">
                📊 Perbandingan Fitur
            </h2>

            <table class="w-full text-sm sm:text-base border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-[#54B9FF] text-white">
                        <th class="p-3 sm:p-4">Fitur</th>
                        <th class="p-3 sm:p-4">Freemium</th>
                        <th class="p-3 sm:p-4">Premium Bulanan</th>
                        <th class="p-3 sm:p-4">Premium Tahunan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Akses Fitur Dasar</td>
                        <td>✓</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Game Aritmetika & Logika</td>
                        <td>✓</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Iklan</td>
                        <td>Ada</td>
                        <td>✗</td>
                        <td>✗</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Game Memori</td>
                        <td>✗</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Power-ups & Avatar</td>
                        <td>✗</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Sertifikat Pembelajaran</td>
                        <td>✗</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Konten Eksklusif</td>
                        <td>✗</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Akses Early Bird</td>
                        <td>✗</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3 sm:p-4">Bonus Power-ups Bulanan</td>
                        <td>✗</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td class="p-3 sm:p-4">Hemat</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp60.000/tahun</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- <!-- Revenue -->
  <div class="bg-white rounded-2xl shadow-xl p-7 sm:p-8 md:p-10 fade-in">
    <h2 class="text-2xl sm:text-3xl font-bold text-center text-slate-800 mb-8">
      💰 Model Pendapatan Kami
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-6">
      <div class="bg-[#54B9FF] text-white p-5 sm:p-6 rounded-xl text-center shadow-md">
        <h3 class="text-lg sm:text-xl font-bold mb-2">Subscription Premium</h3>
        <p class="text-sm sm:text-base">Paket berlangganan bulanan & tahunan</p>
      </div>

      <div class="bg-[#54B9FF] text-white p-5 sm:p-6 rounded-xl text-center shadow-md">
        <h3 class="text-lg sm:text-xl font-bold mb-2">In-App Purchases</h3>
        <p class="text-sm sm:text-base">Item seperti power-ups & avatar</p>
      </div>

      <div class="bg-[#54B9FF] text-white p-5 sm:p-6 rounded-xl text-center shadow-md">
        <h3 class="text-lg sm:text-xl font-bold mb-2">Ads Revenue</h3>
        <p class="text-sm sm:text-base">Pendapatan dari iklan versi gratis</p>
      </div>
    </div>
  </div> --}}

    </div>

    <script>
        const elements = document.querySelectorAll('.fade-in');

        function reveal() {
            const trigger = window.innerHeight * 0.88;
            elements.forEach(el => {
                if (el.getBoundingClientRect().top < trigger) {
                    el.classList.add('show');
                }
            });
        }
        window.addEventListener('scroll', reveal);
        window.addEventListener('load', reveal);
    </script>

@endsection
