<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bunga; // Pastikan untuk mengimpor model Bunga

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Ganti 'Bunga' dengan nama model yang sesuai jika beda
        Bunga::create([
            'NamaBunga' => 'Lavender',
            'Descriptions' => 'Bunga lavender melambangkan ketenangan, keharmonisan, dan kesegaran. Aromanya yang lembut sering kali dikaitkan dengan relaksasi dan ketenangan pikiran',
            'Price' => 'Rp 50.000,00',
        ]);
    }
}
