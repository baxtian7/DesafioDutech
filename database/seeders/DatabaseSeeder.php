<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RubrosTableSeeder::class);
        $this->call(ComunasTableSeeder::class);
        $this->call(DocumentosTableSeeder::class);
        $this->call(Documentos_Rubros_comunasTableSeeder::class);
    }
}
