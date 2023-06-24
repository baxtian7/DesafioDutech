<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comuna;
use App\Models\Rubro;
use App\Models\Documento;
use App\Models\DocumentoRubroComuna;



class Documentos_Rubros_comunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relations= [

            ['comuna' => 'Las Condes', 'rubro' => 'Minimarket', 'documento' => 'Permiso de obras' ],
            ['comuna' => 'Las Condes', 'rubro' => 'Minimarket', 'documento' => 'Permiso de operatividad' ],
            ['comuna' => 'Las Condes', 'rubro' => 'Minimarket', 'documento' => 'Conformación de la sociedad' ],
            ['comuna' => 'Las Condes', 'rubro' => 'Pastelería', 'documento' => 'Permiso de manufactura de alimentos'],
            ['comuna' => 'Las Condes', 'rubro' => 'Pastelería', 'documento' => 'Permiso de autorización Sanitaria'],
            ['comuna' => 'Las Condes', 'rubro' => 'Electrónica', 'documento' => 'Permisos de importación'],
            ['comuna' => 'Las Condes', 'rubro' => 'Electrónica', 'documento' => 'Patentes legales de productos en venta'],
            
            ['comuna' => 'Puente Alto', 'rubro' => 'Minimarket', 'documento' => 'Permiso de obras'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Minimarket', 'documento' => 'Permiso de manipulación de alimentos'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Minimarket', 'documento' => 'Conformación de la sociedad'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Pastelería', 'documento' => 'Permiso de manufactura de alimentos'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Pastelería', 'documento' => 'Permiso de autorización Sanitaria'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Pastelería', 'documento' => 'Cédula de identidad'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Electrónica', 'documento' => 'Permisos de importación'],
            ['comuna' => 'Puente Alto', 'rubro' => 'Electrónica', 'documento' => 'Patente de manufactura de proveedores'],
            
            ['comuna' => 'La Florida', 'rubro' => 'Minimarket', 'documento' => 'Cédula de identidad'],
            ['comuna' => 'La Florida', 'rubro' => 'Minimarket', 'documento' => 'Copia de traslado inicial de mercaderías'],
            ['comuna' => 'La Florida', 'rubro' => 'Minimarket', 'documento' => 'manual de buenas prácticas para la comercialización de productos'],
            ['comuna' => 'La Florida', 'rubro' => 'Pastelería', 'documento' => 'Permiso de manufactura de alimentos'],
            ['comuna' => 'La Florida', 'rubro' => 'Pastelería', 'documento' => 'Permiso de autorización Sanitaria'],
            ['comuna' => 'La Florida', 'rubro' => 'Pastelería', 'documento' => 'Cédula de identidad'],
            ['comuna' => 'La Florida', 'rubro' => 'Electrónica', 'documento' => 'Permisos de importación'],
            ['comuna' => 'La Florida', 'rubro' => 'Electrónica', 'documento' => 'Patente de manufactura de proveedores'],
            ['comuna' => 'La Florida', 'rubro' => 'Electrónica', 'documento' => 'Cédula de identidad']
        ];

        DocumentoRubroComuna::truncate();

        foreach ($relations as $relation) {
            $comunaName = $relation['comuna'];
            $rubroName = $relation['rubro'];
            $documentoName = $relation['documento'];

            $comuna = Comuna::where('name', $comunaName)->first();
            $rubro = Rubro::where('name', $rubroName)->first();
            $documento = Documento::where('name', $documentoName)->first();

            $documentosRubrosComunas = new DocumentoRubroComuna();
            $documentosRubrosComunas->rubro()->associate($rubro);
            $documentosRubrosComunas->comuna()->associate($comuna);
            $documentosRubrosComunas->documento()->associate($documento);
            $documentosRubrosComunas->save();
        }
    }
}
