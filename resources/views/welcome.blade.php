<x-layout>
    <!-- Meneruskan variabel ke slot $title -->
    <x-slot:title>
        Dashboard Utama
    </x-slot:title>

    <!-- Content Utama (masuk ke $slot) -->
    <h1 class="text-2xl font-bold mb-4">Selamat Datang</h1>

    <x-card title="Pengumuman" class="border-l-4 border-blue-500">
        <p>Ini adalah isi konten pengumuman menggunakan komponen card.</p>
    </x-card>

    <!-- Optional Script Khusus Halaman Ini -->
    <x-slot:scripts>
        <script>
            console.log('Halaman Home dimuat');
        </script>
    </x-slot:scripts>
</x-layout>
