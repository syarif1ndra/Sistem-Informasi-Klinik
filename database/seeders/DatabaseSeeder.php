<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Medicine;
use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin Bidan',
            'email' => 'admin@klinik.com',
            'password' => Hash::make('password'),
        ]);

        // Services
        Service::create(['name' => 'Imunisasi', 'description' => 'Pemberian vaksin rutin untuk bayi dan anak.', 'price' => 50000]);
        Service::create(['name' => 'Pemeriksaan Kehamilan', 'description' => 'Pemeriksaan rutin kesehatan ibu dan janin.', 'price' => 100000]);
        Service::create(['name' => 'KB', 'description' => 'Pelayanan Keluarga Berencana.', 'price' => 75000]);
        Service::create(['name' => 'Persalinan', 'description' => 'Pelayanan persalinan normal.', 'price' => 2000000]);

        // Medicines
        Medicine::create(['name' => 'Paracetamol', 'category' => 'Analgesik', 'stock' => 100, 'price' => 5000, 'description' => 'Pereda demam dan nyeri.']);
        Medicine::create(['name' => 'Amoxicillin', 'category' => 'Antibiotik', 'stock' => 50, 'price' => 10000, 'description' => 'Antibiotik spektrum luas.']);
        Medicine::create(['name' => 'Vitamin C', 'category' => 'Suplemen', 'stock' => 200, 'price' => 2000, 'description' => 'Suplemen daya tahan tubuh.']);

        // FAQs
        Faq::create(['question' => 'Apa saja tanda awal kehamilan?', 'answer' => 'Tanda awal meliputi telat haid, mual, dan payudara sensitif.']);
        Faq::create(['question' => 'Kapan bayi harus imunisasi?', 'answer' => 'Sesuai jadwal nasional, dimulai dari lahir hingga usia 18 bulan.']);
    }
}
