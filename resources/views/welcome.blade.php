<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="flex items-center justify-center min-h-[60vh] text-center">

        <div class="space-y-4">
            <h1 class="text-4xl font-bold">
                👋 Selamat datang di <span class="text-primary">Chirper</span>
            </h1>

            <p class="text-base-content/70 text-lg">
                Tempat buat cerita, berbagi pikiran, dan sekadar ngobrol santai.
            </p>

            <p class="text-base-content/50 text-sm italic">
                Enjoy your time here ✨
            </p>

            <div class="mt-4">
                <a href="#" class="btn btn-primary rounded-full px-6 shadow">
                    Mulai Sekarang
                </a>
            </div>
        </div>

    </div>

    <div class="text-center mt-10">
        <h1 class="text-4xl font-bold text-primary">
            🚀 Update Baru dari Bayu
        </h1>

        <p class="mt-3 text-base-content/70">
            Halaman ini sudah berhasil diubah dan di-push ke GitHub.
        </p>

        <div class="mt-5">
            <span class="badge badge-success p-4 text-sm">
                ✔ Updated Successfully
            </span>
        </div>
    </div>

    {{-- 🆕 TAMBAHKAN INI UNTUK MENAMPILKAN CHIRPS DARI CONTROLLER --}}
    <div class="mt-16 max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6">📢 Daftar Chirps</h2>
        
        @isset($chirps)
            @foreach ($chirps as $chirp)
                <div class="card bg-base-100 shadow-md mb-4">
                    <div class="card-body">
                        <p class="text-lg">{{ $chirp['message'] }}</p>
                        <p class="text-xs text-base-content/50">ID: {{ $chirp['id'] }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-base-content/50">Belum ada chirps.</p>
        @endisset
    </div>
</x-layout>