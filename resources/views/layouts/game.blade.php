<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'EduGames') }}</title>
  @vite('resources/css/app.css') {{-- Tailwind via Laravel Vite --}}
  {{--
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-[#F3FAFF] min-h-screen flex flex-col">

  <!-- Header -->
  <div class="bg-[#45C3FF] text-white flex items-center justify-between px-4 py-2">
    <div class="flex items-center gap-2">
      <span class="text-xl">🔥</span>
      <span class="font-bold">1</span>
    </div>
    <h1 class="text-lg font-bold">GAMES</h1>
    <div class="flex items-center gap-2">
      <span class="text-red-500">❤️</span>
      <span class="font-bold">5/5</span>
    </div>
  </div>

  <!-- Main content -->
  <main class="flex-1 pb-20"> {{-- padding bottom biar ga ketutup navbar --}}
    @yield('content')
  </main>

</body>

</html>