@extends('layouts.main')

@section('title', 'Science Quest - Kontak')

@section('content')
<!-- Tambah SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeIn { animation: fadeIn 0.4s ease-out; }
</style>

<!-- Hero -->
<section class="bg-gradient-to-r from-[#5BC8FF] via-[#7BD4FF] to-[#BDE9FF] py-16">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 drop-shadow-md">
      Hubungi Kami
    </h2>
    <p class="text-white/90 text-lg max-w-2xl mx-auto leading-relaxed">
      Punya pertanyaan, saran, atau butuh bantuan? Tim Science Quest siap mendengarkan! <br>
      Kirimkan pesanmu melalui formulir di bawah ini.
    </p>
  </div>
</section>

<!-- Form + Info -->
<section class="bg-gradient-to-r from-white to-[#5BC8FF] py-20">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

    <!-- Form -->
    <div class="bg-white rounded-2xl shadow-lg p-8 border border-blue-100">
      <h3 class="text-2xl font-bold text-[#20B4FF] mb-6">Kirim Pesan</h3>

      <form id="contactForm" action="https://formspree.io/f/xvgvzydv" method="POST" class="space-y-5">
        @csrf
        <div>
          <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
          <input type="text" id="name" name="name" required
                 class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:ring-2 focus:ring-[#20B4FF] outline-none">
        </div>

        <div>
          <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
          <input type="email" id="email" name="email" required
                 class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:ring-2 focus:ring-[#20B4FF] outline-none">
        </div>

        <div>
          <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
          <textarea id="message" name="message" rows="4" required
                    class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:ring-2 focus:ring-[#20B4FF] outline-none"></textarea>
        </div>

        <button type="submit"
                class="w-full bg-[#20B4FF] text-white font-semibold py-2 rounded-lg hover:bg-[#1594d8] transition flex items-center justify-center gap-2">
          <span id="btnText">Kirim Pesan</span>
          <svg id="loadingIcon" class="hidden w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
            <path class="opacity-75" fill="white" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8z"></path>
          </svg>
        </button>
      </form>
    </div>

    <!-- Info Kontak -->
    <div class="flex flex-col items-center md:items-start space-y-6">
      <h3 class="text-2xl font-bold text-[#20B4FF]">Informasi Kontak</h3>

      <div class="space-y-4 text-gray-700">
        <p><i class="fa-solid fa-location-dot text-[#20B4FF] mr-2"></i> Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang</p>
        <p><i class="fa-solid fa-envelope text-[#20B4FF] mr-2"></i> sciensequest@gmail.com</p>
        <p><i class="fa-solid fa-phone text-[#20B4FF] mr-2"></i> +62 851-5650-4046</p>
      </div>

      <div class="flex space-x-5 text-2xl mt-4">
        <a href="https://www.instagram.com/sciencequest.id/" class="text-[#20B4FF] hover:text-blue-300 transition"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/085156504046" class="text-[#20B4FF] hover:text-blue-300 transition"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Script: SweetAlert -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  const btnText = document.getElementById("btnText");
  const loadingIcon = document.getElementById("loadingIcon");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    btnText.textContent = "Mengirim...";
    loadingIcon.classList.remove("hidden");

    const formData = new FormData(form);
    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
        headers: { "Accept": "application/json" }
      });

      if (response.ok) {
        form.reset();
        Swal.fire({
          icon: 'success',
          title: 'Pesan Terkirim!',
          text: '🎉 Terima kasih, pesanmu telah kami terima.',
          confirmButtonColor: '#20B4FF',
          backdrop: 'rgba(0, 0, 0, 0.4)',
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Gagal Mengirim 😥',
          text: 'Terjadi kesalahan. Silakan coba lagi nanti.',
          confirmButtonColor: '#d33',
          backdrop: 'rgba(0, 0, 0, 0.4)',
        });
      }
    } catch (error) {
      Swal.fire({
        icon: 'warning',
        title: 'Koneksi Bermasalah ⚠️',
        text: 'Cek koneksi internetmu dan coba lagi.',
        confirmButtonColor: '#f6ad55',
        backdrop: 'rgba(0, 0, 0, 0.4)',
      });
    } finally {
      btnText.textContent = "Kirim Pesan";
      loadingIcon.classList.add("hidden");
    }
  });
});
</script>
@endsection
