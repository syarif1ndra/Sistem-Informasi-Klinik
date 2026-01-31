@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-pink-500 via-pink-600 to-rose-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-6">Selamat Datang di Klinik Bidan</h1>
                <p class="text-xl text-pink-100 mb-8 leading-relaxed">
                    Kami memberikan pelayanan kesehatan terbaik untuk ibu dan anak. Dengan tenaga bidan profesional dan berpengalaman, kami siap mendampingi perjalanan kehamilan hingga persalinan Anda.
                </p>
                <a href="#daftar" class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full font-bold hover:bg-pink-50 transition duration-150">
                    Daftar Sekarang
                </a>
            </div>
            <div class="text-center">
                <div class="bg-white bg-opacity-20 backdrop-blur-lg rounded-2xl p-12">
                    <div class="text-6xl font-bold mb-4">{{ $currentQueue ? sprintf('%03d', $currentQueue->queue_number) : '---' }}</div>
                    <p class="text-pink-100 text-lg">Nomor Antrian Saat Ini</p>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
@endif

<!-- Fitur Unggulan -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Profesional Berpengalaman</h3>
                <p class="text-gray-600">Tim bidan kami terlatih dan berpengalaman dalam menangani kehamilan dan persalinan.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Harga Terjangkau</h3>
                <p class="text-gray-600">Kami menawarkan layanan kesehatan berkualitas dengan harga yang terjangkau untuk semua kalangan.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Fasilitas Lengkap</h3>
                <p class="text-gray-600">Dilengkapi dengan peralatan medis modern untuk memberikan pelayanan terbaik.</p>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Kami -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Layanan Kesehatan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($services as $service)
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-lg shadow-lg p-8 border-t-4 border-pink-500 hover:shadow-xl transition duration-300">
                    <div class="bg-pink-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $service->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                    <div class="text-pink-600 font-bold text-lg">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
                </div>
            @empty
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-lg shadow-lg p-8 border-t-4 border-pink-500">
                    <div class="bg-pink-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pemeriksaan Kehamilan</h3>
                    <p class="text-gray-600 mb-4">Pemeriksaan rutin untuk memantau kesehatan ibu dan janin selama masa kehamilan.</p>
                </div>
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-lg shadow-lg p-8 border-t-4 border-pink-500">
                    <div class="bg-pink-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Persalinan</h3>
                    <p class="text-gray-600 mb-4">Pelayanan persalinan normal dengan fasilitas yang nyaman dan aman.</p>
                </div>
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-lg shadow-lg p-8 border-t-4 border-pink-500">
                    <div class="bg-pink-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Imunisasi</h3>
                    <p class="text-gray-600 mb-4">Pemberian vaksin rutin untuk bayi dan anak sesuai jadwal nasional.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Obat Tersedia -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Obat-Obatan Tersedia</h2>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-pink-500 to-rose-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Nama Obat</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($medicines as $medicine)
                            <tr class="hover:bg-gray-50 transition duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $medicine->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                                        {{ $medicine->category }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $medicine->description }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-8 text-center text-gray-500">Belum ada data obat.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Pertanyaan yang Sering Diajukan</h2>
        <div class="space-y-6">
            @forelse($faqs as $faq)
                <div class="bg-white rounded-lg shadow-lg border-l-4 border-pink-500 overflow-hidden hover:shadow-xl transition duration-300">
                    <details class="group cursor-pointer">
                        <summary class="flex items-center justify-between p-6 font-semibold text-gray-800 hover:bg-pink-50 transition duration-150">
                            <span class="flex items-center">
                                <span class="text-pink-600 mr-3">Q:</span>
                                {{ $faq->question }}
                            </span>
                            <svg class="w-5 h-5 text-pink-600 group-open:rotate-180 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6 pt-2 text-gray-700 bg-pink-50">
                            <span class="text-pink-600 font-semibold">A:</span> {{ $faq->answer }}
                        </div>
                    </details>
                </div>
            @empty
                <div class="bg-white rounded-lg shadow-lg border-l-4 border-pink-500 p-6">
                    <h3 class="text-lg font-bold text-pink-600 mb-2">Q: Apa saja tanda-tanda awal kehamilan?</h3>
                    <p class="text-gray-700">A: Tanda awal kehamilan meliputi telat haid, mual di pagi hari (morning sickness), payudara sensitif, dan kelelahan.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg border-l-4 border-pink-500 p-6">
                    <h3 class="text-lg font-bold text-pink-600 mb-2">Q: Kapan sebaiknya bayi mulai mendapatkan imunisasi?</h3>
                    <p class="text-gray-700">A: Imunisasi sebaiknya dimulai segera setelah lahir (Hepatitis B) dan dilanjutkan sesuai jadwal yang ditentukan oleh dokter atau bidan.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- CTA Section -->
<div id="daftar" class="py-16 bg-gradient-to-r from-pink-500 via-pink-600 to-rose-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Siap Mendaftar?</h2>
        <p class="text-xl text-pink-100 mb-8">Daftarkan diri Anda sekarang dan dapatkan nomor antrian untuk konsultasi dengan bidan kami.</p>
        <a href="{{ route('public.register') }}" class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full font-bold hover:bg-pink-50 transition duration-150">
            Daftar Sekarang
        </a>
    </div>
</div>

<script>
    function updateQueue() {
        fetch('/api/current-queue')
            .then(response => response.json())
            .then(data => {
                const queueElements = document.querySelectorAll('[data-queue-number]');
                queueElements.forEach(el => {
                    if (data.queue_number) {
                        el.innerText = data.queue_number.toString().padStart(3, '0');
                    } else {
                        el.innerText = '---';
                    }
                });
            });
    }
    setInterval(updateQueue, 5000);
</script>
@endsection
