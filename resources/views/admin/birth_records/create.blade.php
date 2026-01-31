<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Kelahiran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.birth_records.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Bayi -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Bayi *</label>
                            <input type="text" name="baby_name" value="{{ old('baby_name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('baby_name') border-red-500 @enderror">
                            @error('baby_name')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir *</label>
                            <input type="date" name="birth_date" value="{{ old('birth_date') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('birth_date') border-red-500 @enderror">
                            @error('birth_date')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Waktu Lahir -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Lahir *</label>
                            <input type="time" name="birth_time" value="{{ old('birth_time') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('birth_time') border-red-500 @enderror">
                            @error('birth_time')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Tempat Lahir -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir *</label>
                            <input type="text" name="birth_place" value="{{ old('birth_place') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('birth_place') border-red-500 @enderror">
                            @error('birth_place')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin *</label>
                            <select name="gender" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('gender') border-red-500 @enderror">
                                <option value="">-- Pilih --</option>
                                <option value="L" {{ old('gender') === 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('gender') === 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('gender')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Berat Bayi -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Berat Bayi (kg)</label>
                            <input type="text" name="baby_weight" value="{{ old('baby_weight') }}" placeholder="cth: 3.5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('baby_weight') border-red-500 @enderror">
                            @error('baby_weight')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Panjang Bayi -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Panjang Bayi (cm)</label>
                            <input type="text" name="baby_length" value="{{ old('baby_length') }}" placeholder="cth: 50" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('baby_length') border-red-500 @enderror">
                            @error('baby_length')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Nama Ibu -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ibu *</label>
                            <input type="text" name="mother_name" value="{{ old('mother_name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('mother_name') border-red-500 @enderror">
                            @error('mother_name')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- NIK Ibu -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">NIK Ibu *</label>
                            <input type="text" name="mother_nik" value="{{ old('mother_nik') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('mother_nik') border-red-500 @enderror">
                            @error('mother_nik')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Alamat Ibu -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Ibu</label>
                            <textarea name="mother_address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('mother_address') border-red-500 @enderror">{{ old('mother_address') }}</textarea>
                            @error('mother_address')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Nama Ayah -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ayah *</label>
                            <input type="text" name="father_name" value="{{ old('father_name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('father_name') border-red-500 @enderror">
                            @error('father_name')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- NIK Ayah -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">NIK Ayah *</label>
                            <input type="text" name="father_nik" value="{{ old('father_nik') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('father_nik') border-red-500 @enderror">
                            @error('father_nik')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Alamat Ayah -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Ayah</label>
                            <textarea name="father_address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('father_address') border-red-500 @enderror">{{ old('father_address') }}</textarea>
                            @error('father_address')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Nomor Surat Kelahiran -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Surat Kelahiran</label>
                            <input type="text" name="birth_certificate_number" value="{{ old('birth_certificate_number') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('birth_certificate_number') border-red-500 @enderror">
                            @error('birth_certificate_number')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Catatan -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Catatan</label>
                            <textarea name="notes" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 @error('notes') border-red-500 @enderror">{{ old('notes') }}</textarea>
                            @error('notes')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 mt-8">
                        <a href="{{ route('admin.birth_records.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Batal
                        </a>
                        <button type="submit" class="px-6 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
