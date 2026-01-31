<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Data Kelahiran') }}
            </h2>
            <a href="{{ route('admin.birth_records.create') }}" class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">
                + Tambah Data Kelahiran
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-pink-500 to-rose-600">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Nama Bayi</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Tanggal Lahir</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Jenis Kelamin</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Nama Ibu</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Nama Ayah</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-white uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($birthRecords as $record)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $record->baby_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        {{ $record->birth_date->format('d/m/Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $record->gender === 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                            {{ $record->gender === 'L' ? 'Laki-laki' : 'Perempuan' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $record->mother_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $record->father_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                        <a href="{{ route('admin.birth_records.show', $record) }}" class="text-blue-600 hover:text-blue-900">Lihat</a>
                                        <a href="{{ route('admin.birth_records.edit', $record) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                        <a href="{{ route('admin.birth_records.generatePdf', $record) }}" class="text-green-600 hover:text-green-900" target="_blank">Cetak</a>
                                        <form action="{{ route('admin.birth_records.destroy', $record) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-8 text-center text-gray-500">Belum ada data kelahiran.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4">
                    {{ $birthRecords->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
