@extends('layouts.main')

@section('title', 'Data Pribadi')

@section('content')

<!-- ANIMASI SLIDE-IN -->
<style>
    .slide-in {
        animation: slideIn 0.5s ease-out;
    }
    @keyframes slideIn {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="min-h-screen bg-[#56CCF2] px-4 py-6 flex justify-center slide-in">
    <div class="w-full max-w-md">

        <!-- Header -->
        <div class="flex items-center mb-6">
            <a href="/profile" class="text-white text-2xl"><i class="fa-solid fa-arrow-left"></i></a>
            <h1 class="flex-1 text-center text-xl font-bold text-white">PROFILE</h1>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-[30px] p-6 pt-16 relative">

            

            <!-- Name -->
            <div class="text-center mt-2">
                <h2 class="text-lg font-extrabold text-[#00334E]">{{ $user->name }}</h2>
                <p class="text-sm text-[#00334E]/70">ID: {{ $user->id }}</p>
            </div>

            <!-- FORM -->
            <form action="{{ route('profile.personal.update') }}" method="POST" class="mt-6">
                @csrf

                <!-- NAME -->
                <label class="font-bold text-[#00334E]">Nama</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                       class="w-full mt-1 mb-3 p-3 rounded-lg border focus:ring-2 focus:ring-blue-300">

                <!-- EMAIL -->
                <label class="font-bold text-[#00334E]">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="w-full mt-1 mb-3 p-3 rounded-lg border focus:ring-2 focus:ring-blue-300">

                <!-- BIRTH DATE (FIXED VALUE) -->
                <label class="font-bold text-[#00334E]">Tanggal Lahir</label>
                <input type="date" name="birth_date"
                       value="{{ old('birth_date', $user->birth_date ? $user->birth_date->format('Y-m-d') : '' ) }}"
                       class="w-full mt-1 mb-3 p-3 rounded-lg border focus:ring-2 focus:ring-blue-300">

                <button class="w-full bg-blue-500 text-white py-3 rounded-xl font-bold mt-3">
                    Simpan Perubahan
                </button>
            </form>

        </div>
    </div>
</div>


<!-- SWEET ALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    confirmButtonColor: '#3085d6',
});
</script>
@endif

@if ($errors->any())
<script>
Swal.fire({
    icon: 'error',
    title: 'Validasi Gagal!',
    html: `{!! implode('<br>', $errors->all()) !!}`,
    confirmButtonColor: '#d33',
});
</script>
@endif

@endsection
