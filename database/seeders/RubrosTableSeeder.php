<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubro;

class RubrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rubros = [
            ['name' => 'Pastelería'],
            ['name' => 'Minimarket'],
            ['name' => 'Electrónica'],
        ];

        foreach ($rubros as $rubro) {
            Rubro::firstOrCreate($rubro);
        }
    }
}
