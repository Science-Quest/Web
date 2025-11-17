<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Auth')</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  {{-- SweetAlert2 untuk flash message --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#F6FBFF] flex flex-col items-center min-h-screen font-sans relative">


  {{-- Flash message pakai SweetAlert --}}
  @if (session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          timer: 2000,
          showConfirmButton: false
        })
      });
    </script>
  @endif

  @if (session('error'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          timer: 2500,
          showConfirmButton: false
        })
      });
    </script>
  @endif

  {{-- Konten halaman --}}
  <div class="bg-[#45C3FF] w-[380px] rounded-2xl shadow-md overflow-hidden">
    @yield('content')
  </div>
<script> lucide.createIcons(); </script>
</body>
</html>
