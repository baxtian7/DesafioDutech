<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            ['name' => 'Permiso de operatividad'],
            ['name' => 'Permisos de importación'],
            ['name' => 'Patentes legales de productos en venta'],
            ['name' => 'Permiso de obras'],
            ['name' => 'Permiso de manipulación de alimentos'],
            ['name' => 'Conformación de la sociedad'],
            ['name' => 'Copia de traslado inicial de mercaderías '],
            ['name' => 'manual de buenas prácticas para la comercialización de productos'],
            ['name' => 'Permiso de manufactura de alimentos'],
            ['name' => 'Permiso de autorizaciónSanitaria'],
            ['name' => 'Patente de manufactura de proveedores'],
            ['name' => 'Cédula de identidad']
        ];

        foreach ($documentos as $documento) {
            Documento::firstOrCreate($documento);
        }
    }
}
