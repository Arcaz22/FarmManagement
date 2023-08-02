<?php

namespace Database\Seeders;

use App\Models\farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalaKandangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kepalaKandangOptions = [
            'Admin A', 
            'Admin B', 
            'Admin C'
        ];

        foreach ($kepalaKandangOptions as $option) {
            Farm::create([
                'kepala_kandang' => $option,
            ]);
        }
    }
}
