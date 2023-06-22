<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comuna;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comunas = [
            ['name' => 'Las Condes'],
            ['name' => 'Puente Alto'],
            ['name' => 'La Florida'],
        ];

        foreach ($comunas as $comuna) {
            Comuna::firstOrCreate($comuna);
        }
    }
}
