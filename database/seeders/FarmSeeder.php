<?php

namespace Database\Seeders;

use App\Models\Farm;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kepalaKandangValues = ['Georgia Anatasya', 'Aladdin bin Slamet', 'Dwina Insani', 'Dimas Nallando Putra', 'Muhammad Besari'];
        $statusKandangValues = ['panen', 'chick in', 'persiapan kandang', 'cuci kandang', 'kosong'];

        for ($i = 1; $i <= 10; $i++) {
            Farm::create([
                'nama_kandang' => 'Kandang ' . $i,
                'kepala_kandang' => $kepalaKandangValues[array_rand($kepalaKandangValues)],
                'status_kandang' => $statusKandangValues[array_rand($statusKandangValues)],
                'kapasitas_kandang' => rand(50, 200),
                'lokasi_kandang' => 'Lokasi Kandang ' . $i,
            ]);
        }
    }
}
