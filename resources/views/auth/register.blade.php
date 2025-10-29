<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-[#f3faff] flex items-center justify-center min-h-screen font-sans">

  <div class="bg-white w-[380px] rounded-2xl shadow-md overflow-hidden" x-data="{ step: 1 }">

    <!-- Header -->
    <div class="bg-[#54B9FF] p-6 rounded-b-3xl text-center relative">
      <h2 class="text-white text-xl font-bold">REGISTER</h2>
      <p class="text-white text-sm" x-show="step === 1">Lengkapi data akunmu</p>
      <p class="text-white text-sm" x-show="step === 2">Hampir selesai!</p>
      <div class="w-full bg-white/40 h-2 rounded-full mt-3">
        <div class="h-2 bg-white rounded-full transition-all duration-300"
             :class="step === 1 ? 'w-1/2' : 'w-full'"></div>
      </div>
    </div>

    <!-- Error -->
    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-3 mx-6 mt-4 rounded-lg">
        <ul class="list-disc pl-5 text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Step 1 -->
    <form method="POST" action="{{ route('register') }}" x-data="{ step: 1 }">
  @csrf

  <!-- Step 1 -->
  <div class="p-6 space-y-4" x-show="step === 1">
    <div>
      <label>Username</label>
      <input type="text" name="username" required class="w-full border rounded-lg px-3 py-2 mt-1">
    </div>

    <div>
      <label>Password</label>
      <input type="password" name="password" required class="w-full border rounded-lg px-3 py-2 mt-1">
    </div>

    <div>
      <label>Konfirmasi Password</label>
      <input type="password" name="password_confirmation" required class="w-full border rounded-lg px-3 py-2 mt-1">
    </div>

    <button type="button" @click="step = 2" class="w-full bg-[#54B9FF] text-white py-2 rounded-lg font-bold">
      LANJUTKAN
    </button>

    <div class="flex justify-center text-gray-400 text-sm">
      <span>atau</span>
    </div>

    <a href="{{ route('auth.google') }}" class="flex items-center justify-center border py-2 rounded-lg hover:bg-gray-50 transition">
      <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2">
      <span class="text-sm font-semibold text-gray-700">Sign Up With Google</span>
    </a>
  </div>

  <!-- Step 2 -->
  <div class="p-6 space-y-4" x-show="step === 2" x-transition>
    <div>
      <label>Tanggal lahir</label>
      <input type="date" name="birth_date" class="w-full border rounded-lg px-3 py-2 mt-1">
    </div>

    <div>
      <label>Email</label>
      <input type="email" name="email" required class="w-full border rounded-lg px-3 py-2 mt-1">
    </div>

    <button type="submit" class="w-full bg-[#54B9FF] text-white py-2 rounded-lg font-bold">
      REGISTER
    </button>

    <button type="button" @click="step = 1" class="w-full bg-gray-100 text-gray-700 py-2 rounded-lg font-semibold hover:bg-gray-200">
      Kembali
    </button>
  </div>
</form>

  </div>
</body>
</html>
