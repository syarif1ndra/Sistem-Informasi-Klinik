<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Bidan - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('public.home') }}" class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <div class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-rose-600 bg-clip-text text-transparent">
                                🏥 Klinik Bidan
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ route('public.home') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium transition duration-150">Beranda</a>
                    <a href="{{ route('public.home') }}#layanan" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium transition duration-150">Layanan</a>
                    <a href="{{ route('public.home') }}#obat" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium transition duration-150">Obat</a>
                    <a href="{{ route('public.home') }}#faq" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium transition duration-150">FAQ</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('public.register') }}" class="hidden sm:inline-block bg-pink-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-pink-700 transition duration-150">Daftar Pasien</a>
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-pink-600 text-sm font-medium transition duration-150">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Klinik Bidan</h3>
                    <p class="text-gray-400">Memberikan pelayanan kesehatan terbaik untuk ibu dan anak dengan tenaga profesional berpengalaman.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak</h3>
                    <p class="text-gray-400">Telepon: (021) 1234-5678</p>
                    <p class="text-gray-400">Email: info@klinikbidan.com</p>
                    <p class="text-gray-400">Alamat: Jl. Kesehatan No. 123, Jakarta</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Jam Operasional</h3>
                    <p class="text-gray-400">Senin - Jumat: 08:00 - 17:00</p>
                    <p class="text-gray-400">Sabtu: 08:00 - 14:00</p>
                    <p class="text-gray-400">Minggu: Tutup</p>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <p class="text-center text-gray-400">&copy; {{ date('Y') }} Klinik Bidan. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
