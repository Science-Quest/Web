@extends('layouts.main')

@section('title', 'Profil')

@section('content')

<div class="min-h-screen bg-[#56CCF2] px-4 py-6 flex justify-center">
  <div class="w-full max-w-md">

    <!-- Header -->
    <div class="flex items-center mb-6">
      <a href="/" class="text-white text-2xl"><i class="fa-solid fa-arrow-left"></i></a>
      <h1 class="flex-1 text-center text-xl font-bold text-white">PROFILE</h1>
    </div>

    <!-- Card -->
    <div class="bg-white/40 backdrop-blur-md rounded-[30px] p-6 text-center">

      <!-- Avatar -->
      <div class="relative flex justify-center mb-4">
  <img 
    src="{{ $user->avatar ? asset('storage/'.$user->avatar) : 'https://i.pravatar.cc/150?u='.$user->id }}"
    class="w-28 h-28 rounded-full border-4 border-white shadow-lg object-cover"
  >

  <!-- Tombol Ubah Foto -->
  <button onclick="openAvatarModal()"
    class="absolute bottom-1 right-[35%] bg-[#20B4FF] text-white p-2 rounded-full shadow-md hover:bg-[#1594d8]">
    <i class="fa-solid fa-camera"></i>
  </button>
</div>


      <!-- Name + ID -->
      <h2 class="text-lg font-extrabold text-[#00334E]">{{ $user->username }}</h2>
      <p class="text-sm text-[#00334E]/70">ID: {{ $user->id }}</p>

      <!-- Menu -->
      <div class="space-y-3 mt-8">

        <button onclick="openUsernameModal()" 
          class="w-full bg-[#EBF7FE] hover:bg-[#DFF1FD] p-4 rounded-xl flex items-center gap-3 text-left">
          <i class="fa-solid fa-image text-[#6AAECF] text-xl"></i>
          <span class="text-[#00334E] font-semibold">Ubah username</span>
        </button>

        <button onclick="window.location.href='{{ route('profile.personal') }}'"
          class="w-full bg-[#EBF7FE] hover:bg-[#DFF1FD] p-4 rounded-xl flex items-center gap-3 text-left">
          <i class="fa-solid fa-id-card text-[#6AAECF] text-xl"></i>
          <span class="text-[#00334E] font-semibold">Data pribadi</span>
        </button>


        <button 
          class="w-full bg-[#EBF7FE] hover:bg-[#DFF1FD] p-4 rounded-xl flex items-center gap-3 text-left">
          <i class="fa-solid fa-image-portrait text-[#6AAECF] text-xl"></i>
          <span class="text-[#00334E] font-semibold">Status Membership</span>
        </button>

        <button  onclick="window.location.href='{{ route('settings') }}'"
          class="w-full bg-[#EBF7FE] hover:bg-[#DFF1FD] p-4 rounded-xl flex items-center gap-3 text-left">
          <i class="fa-solid fa-gear text-[#6AAECF] text-xl"></i>
          <span class="text-[#00334E] font-semibold">Pengaturan</span>
        </button>
        
      </div>

      <!-- Join date -->
      <p class="mt-8 text-sm text-[#00334E]/90">
        Mulai bergabung pada {{ $user->created_at->format('d F Y') }}
      </p>

      <!-- Delete Account -->
      <!-- Delete Account -->
      <form id="deleteForm" action="{{ route('profile.delete') }}" method="POST">
          @csrf
          @method('DELETE')

          <button type="button" id="deleteButton"
              class="mt-4 w-full bg-red-100 text-red-600 p-4 rounded-xl font-bold flex items-center justify-center gap-2">
              <i class="fa-solid fa-person-half-dress"></i> Hapus akun
          </button>
      </form>

    </div>
  </div>
</div>


<!-- ===================== MODAL – UPDATE USERNAME ===================== -->
<div id="usernameModal" class="fixed inset-0 bg-[#20B4FF]/40 backdrop-blur-sm hidden flex items-center justify-center">
  <div class="bg-white rounded-xl p-6 w-80">
    <h2 class="font-bold mb-3">Ubah Username</h2>

    <form action="{{ route('profile.update.username') }}" method="POST">
      @csrf
      <input type="text" name="username" value="{{ $user->name }}"
        class="w-full border rounded-lg p-2 mb-3">

      <button class="w-full bg-blue-500 text-white p-2 rounded-lg">Simpan</button>
      <button type="button" onclick="closeUsernameModal()" class="mt-2 w-full p-2">Batal</button>
    </form>
  </div>
</div>


<!-- ===================== MODAL – UPDATE INFO ===================== -->
<div id="infoModal" class="fixed inset-0 bg-[#20B4FF]/40 backdrop-blur-sm hidden flex items-center justify-center">
  <div class="bg-white rounded-xl p-6 w-80">
    <h2 class="font-bold mb-3">Data Pribadi</h2>

    <form action="{{ route('profile.update.info') }}" method="POST">
      @csrf

      <input type="email" name="email" value="{{ $user->email }}"
        class="w-full border rounded-lg p-2 mb-3">

      <input type="text" name="phone" value="{{ $user->phone }}"
        placeholder="No HP" class="w-full border rounded-lg p-2 mb-3">

      <select name="gender" class="w-full border rounded-lg p-2 mb-3">
        <option value="">Jenis Kelamin</option>
        <option value="Laki-laki" {{ $user->gender=='Laki-laki'?'selected':'' }}>Laki-laki</option>
        <option value="Perempuan" {{ $user->gender=='Perempuan'?'selected':'' }}>Perempuan</option>
      </select>

      <input type="date" name="birthdate" value="{{ $user->birthdate }}"
        class="w-full border rounded-lg p-2 mb-3">

      <button class="w-full bg-blue-500 text-white p-2 rounded-lg">Simpan</button>
      <button type="button" onclick="closeInfoModal()" class="mt-2 w-full p-2">Batal</button>
    </form>

  </div>
</div>

<!-- ===================== MODAL – UPDATE AVATAR ===================== -->
<div id="avatarModal" 
     class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden 
            flex items-center justify-center z-50">
  
  <div class="bg-white rounded-xl p-6 w-80 animate-fadeIn shadow-lg">
    <h2 class="font-bold mb-3 text-center">Ubah Foto Profil</h2>

    <form action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <input type="file" name="avatar" accept="image/*" 
        class="w-full border rounded-lg p-2 mb-3" onchange="previewImage(event)">

      <img id="avatarPreview" 
           class="w-24 h-24 rounded-full mx-auto hidden mb-3 object-cover border">

      <button class="w-full bg-blue-500 text-white p-2 rounded-lg">Simpan</button>
      <button type="button" onclick="closeAvatarModal()" 
        class="mt-2 w-full p-2 rounded-lg border">Batal</button>
    </form>
  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function openUsernameModal() {
  document.getElementById("usernameModal").classList.remove("hidden");
}
function closeUsernameModal() {
  document.getElementById("usernameModal").classList.add("hidden");
}

function openInfoModal() {
  document.getElementById("infoModal").classList.remove("hidden");
}
function closeInfoModal() {
  document.getElementById("infoModal").classList.add("hidden");
}

function deleteConfirm() {
  if (confirm("Yakin ingin menghapus akun?")) {
    document.location.href = "{{ route('profile.delete') }}";
  }
}

// Avatar Modal
function openAvatarModal() {
  document.getElementById("avatarModal").classList.remove("hidden");
}
function closeAvatarModal() {
  document.getElementById("avatarModal").classList.add("hidden");
}

function previewImage(event) {
  let img = document.getElementById("avatarPreview");
  img.src = URL.createObjectURL(event.target.files[0]);
  img.classList.remove("hidden");
}

// Delete Account Confirmation with SweetAlert2
document.getElementById("deleteButton").addEventListener("click", function () {

    Swal.fire({
        title: "Yakin ingin menghapus akun?",
        text: "Akun Anda akan dihapus permanen dan tidak bisa dikembalikan.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal",
        reverseButtons: true,
        backdrop: `rgba(0,0,0,0.5)`
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("deleteForm").submit();
        }
    });

});
</script>

@endsection
