@extends('layouts.public')

@section('title', 'Layanan Kami')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Layanan Kesehatan Kami</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($services as $service)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-pink-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $service->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                    <div class="text-pink-600 font-bold">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
                </div>
            @empty
                <!-- Static Fallback if no data -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-pink-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pemeriksaan Kehamilan</h3>
                    <p class="text-gray-600 mb-4">Pemeriksaan rutin untuk memantau kesehatan ibu dan janin selama masa kehamilan.</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-pink-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Persalinan</h3>
                    <p class="text-gray-600 mb-4">Pelayanan persalinan normal dengan fasilitas yang nyaman dan aman.</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-pink-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Imunisasi</h3>
                    <p class="text-gray-600 mb-4">Pemberian vaksin rutin untuk bayi dan anak sesuai jadwal nasional.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
