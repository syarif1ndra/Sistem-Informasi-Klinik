<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Klinik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h3 class="text-2xl font-bold mb-6">Ringkasan Laporan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="text-gray-500 text-sm uppercase font-bold">Total Pasien Terdaftar</div>
                        <div class="text-4xl font-black text-gray-900 mt-2">{{ $report['total_patients'] }}</div>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="text-gray-500 text-sm uppercase font-bold">Total Pendapatan (Lunas)</div>
                        <div class="text-4xl font-black text-green-600 mt-2">Rp {{ number_format($report['total_revenue'], 0, ',', '.') }}</div>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="text-gray-500 text-sm uppercase font-bold">Total Rekam Medis</div>
                        <div class="text-4xl font-black text-blue-600 mt-2">{{ $report['total_medical_records'] }}</div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <button onclick="window.print()" class="bg-gray-800 text-white px-6 py-2 rounded-md hover:bg-gray-900">Cetak Laporan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
