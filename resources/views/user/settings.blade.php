@extends('layouts.main')

@section('content')
    <div class="min-h-screen bg-[#EAF7FF] py-6">

        {{-- WRAPPER RESPONSIVE --}}
        <div class="mx-auto w-full max-w-md md:max-w-xl lg:max-w-2xl">

            <div class="text-center text-[#00334E] font-bold text-2xl mb-6">
                PENGATURAN
            </div>

            {{-- CARD UTAMA --}}
            <div class="bg-white rounded-2xl shadow-md p-4 space-y-3">
                {{-- Username --}}
                <button onclick="window.location.href='{{ route('profile') }}'"
                    class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl hover:bg-[#DFF1FD]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-id-card text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">{{ auth()->user()->username }}</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                {{-- Email --}}
                <button onclick="openEmailModal()"
                    class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl hover:bg-[#DFF1FD]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">{{ auth()->user()->email }}</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                {{-- Ubah Password --}}
                <button onclick="openPasswordModal()"
                    class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl hover:bg-[#DFF1FD]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-key text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Ubah password</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                {{-- Atur Profile --}}
                <button onclick="window.location.href='{{ route('profile') }}'"
                    class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl hover:bg-[#DFF1FD]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-user text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Atur profile</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                {{-- Guardian --}}
                <button class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl hover:bg-[#DFF1FD]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-link text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Sambungkan Guardian</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>
            </div>

            {{-- CARD 2 --}}
            <div class="bg-white rounded-2xl shadow-md p-4 mt-5 space-y-3">
                <button class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-money-bill-wave text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Riwayat pembelian</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                <button class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-chart-line text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Laporan penggunaan</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>

                <button class="w-full flex items-center justify-between bg-[#EBF7FE] p-4 rounded-xl">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-[#6AAECF] text-xl"></i>
                        <span class="text-[#00334E] font-semibold">Hubungi kami</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[#6AAECF]"></i>
                </button>
            </div>

            {{-- Logout --}}
            <button onclick="logoutConfirm()"
                class="w-full bg-red-100 text-red-600 p-4 rounded-xl font-bold flex items-center justify-center gap-2 mt-6">
                <i class="fa-solid fa-right-from-bracket"></i> Keluar
            </button>

        </div> {{-- WRAPPER END --}}
    </div>

    {{-- ================= MODAL UBAH PASSWORD ================= --}}
    <div id="passwordModal" class="fixed inset-0 hidden bg-black bg-opacity-40 flex items-center justify-center p-4 z-50">
        <div class="bg-white w-full max-w-md rounded-xl p-6 shadow-lg">

            <h2 class="text-xl font-bold mb-4 text-[#00334E]">Ubah Password</h2>

            <form method="POST" action="{{ route('settings.updatePassword') }}">
                @csrf

                <label class="font-semibold">Password Lama</label>
                <input type="password" name="old_password" class="w-full p-3 mb-3 rounded-lg bg-[#F1F9FF]">

                <label class="font-semibold">Password Baru</label>
                <input type="password" name="new_password" class="w-full p-3 mb-3 rounded-lg bg-[#F1F9FF]">

                <label class="font-semibold">Ulangi Password</label>
                <input type="password" name="new_password_confirmation" class="w-full p-3 mb-4 rounded-lg bg-[#F1F9FF]">

                <button class="w-full bg-[#20B4FF] text-white p-3 rounded-xl font-semibold">Simpan</button>
            </form>

            <button onclick="closePasswordModal()" class="mt-3 w-full text-center text-gray-500">Batal</button>
        </div>
    </div>

    {{-- ================= MODAL UBAH EMAIL ================= --}}
    <div id="emailModal" class="fixed inset-0 hidden bg-black bg-opacity-40 flex items-center justify-center p-4 z-50">
        <div class="bg-white w-full max-w-md rounded-xl p-6 shadow-lg">

            <h2 class="text-xl font-bold mb-4 text-[#00334E]">Ubah Email</h2>

            <form method="POST" action="{{ route('settings.updateEmail') }}">
                @csrf

                <label class="font-semibold">Email Baru</label>
                <input type="email" name="email" value="{{ auth()->user()->email }}"
                    class="w-full p-3 mb-4 rounded-lg bg-[#F1F9FF]">

                <button class="w-full bg-[#20B4FF] text-white p-3 rounded-xl font-semibold">Simpan</button>
            </form>

            <button onclick="closeEmailModal()" class="mt-3 w-full text-center text-gray-500">Batal</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: "{{ session('error') }}",
                showConfirmButton: true,
            });
        </script>
    @endif

    {{-- Validasi error --}}
    @if ($errors->any())
        <script>
            let errorsHtml = `{!! implode('<br>', $errors->all()) !!}`;
            Swal.fire({
                icon: 'error',
                title: 'Validasi gagal!',
                html: errorsHtml,
                confirmButtonColor: '#20B4FF'
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            document.getElementById('passwordModal')?.classList.add('hidden');
            document.getElementById('emailModal')?.classList.add('hidden');
        </script>
    @endif

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script>
        function openPasswordModal() {
            document.getElementById('passwordModal').classList.remove('hidden');
        }

        function closePasswordModal() {
            document.getElementById('passwordModal').classList.add('hidden');
        }

        function openEmailModal() {
            document.getElementById('emailModal').classList.remove('hidden');
        }

        function closeEmailModal() {
            document.getElementById('emailModal').classList.add('hidden');
        }
        // Logout Confirmation with SweetAlert2
        function logoutConfirm() {
            Swal.fire({
                title: "Keluar dari akun?",
                text: "Anda akan diarahkan ke halaman login.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, keluar",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading
                    Swal.fire({
                        title: "Sedang keluar...",
                        didOpen: () => {
                            Swal.showLoading();
                        },
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    });

                    // Submit logout form
                    document.getElementById("logout-form").submit();
                }
            });
        }
    </script>
@endsection
