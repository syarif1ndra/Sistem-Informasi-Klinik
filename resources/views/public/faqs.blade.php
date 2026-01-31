@extends('layouts.public')

@section('title', 'FAQ Kesehatan')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">FAQ Kesehatan Ibu & Anak</h2>
        
        <div class="space-y-6 max-w-3xl mx-auto">
            @forelse($faqs as $faq)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold text-pink-600 mb-2">Q: {{ $faq->question }}</h3>
                    <p class="text-gray-700">A: {{ $faq->answer }}</p>
                </div>
            @empty
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold text-pink-600 mb-2">Q: Apa saja tanda-tanda awal kehamilan?</h3>
                    <p class="text-gray-700">A: Tanda awal kehamilan meliputi telat haid, mual di pagi hari (morning sickness), payudara sensitif, dan kelelahan.</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold text-pink-600 mb-2">Q: Kapan sebaiknya bayi mulai mendapatkan imunisasi?</h3>
                    <p class="text-gray-700">A: Imunisasi sebaiknya dimulai segera setelah lahir (Hepatitis B) dan dilanjutkan sesuai jadwal yang ditentukan oleh dokter atau bidan.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
