<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Antrian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Daftar Antrian Hari Ini ({{ date('d M Y') }})</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Antrian</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Pasien</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($queues as $queue)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-bold text-2xl">{{ sprintf('%03d', $queue->queue_number) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $queue->patient->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $queue->status == 'calling' ? 'bg-green-100 text-green-800' : ($queue->status == 'waiting' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($queue->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    @if($queue->status == 'waiting')
                                    <form action="{{ route('admin.queues.updateStatus', $queue) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="status" value="calling">
                                        <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded text-sm">Panggil</button>
                                    </form>
                                    @endif

                                    @if($queue->status == 'calling')
                                    <form action="{{ route('admin.queues.updateStatus', $queue) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="status" value="finished">
                                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Selesai</button>
                                    </form>
                                    @endif

                                    @if($queue->status == 'finished')
                                    <span class="text-gray-400 text-sm italic">Selesai</span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada antrian hari ini.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
