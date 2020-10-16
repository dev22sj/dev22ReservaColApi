<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Negocios\Negocio;

class NegociosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Negocio::truncate();

        Negocio::create([
            'nombre' => 'Restaurante la esquina del sabor',
            'act_economica' => 4,
            'codigo_dep' => '8',
            'codigo_mun' => '1',
            'direccion' => 'Calle 26d Carrera 72',
            'latitud' => 10.976723,
            'longitud' => -74.811134,
            'capacidad' => 75,
            'aforo_per' => 1,
            'validaciones' => '{
                "horario": [
                  {
                    "atencion": "07:00-17:00",
                    "dias": "L,M,X,J,V"
                  },
                  {
                    "atencion": "08:00-12:00",
                    "dias": "S,D"
                  }
                ],
                "diasFeastivo": true,
                "horarioFeastivos": [
                  {
                    "atencion": "08:00-15:00"
                  }
                ],
                "limiteTiempo": {
                  "habilitado": true,
                  "timpoMax": 10800
                },
                "limiteAcompanante": {
                  "habilitado": true,
                  "acoMax": 3
                }
              }'
        ]);
        
        Negocio::create([
            'nombre' => 'Restaurante marte',
            'act_economica' => 4,
            'codigo_dep' => '8',
            'codigo_mun' => '1',
            'direccion' => 'Calle 76 Carrera 75',
            'latitud' => 11.007996,
            'longitud' => -74.799003,
            'capacidad' => 100,
            'aforo_per' => 1,
            'validaciones' => '{
                "horario": [
                  {
                    "atencion": "07:00-17:00",
                    "dias": "L,M,X,J,V"
                  },
                  {
                    "atencion": "08:00-12:00",
                    "dias": "S,D"
                  }
                ],
                "diasFeastivo": false,
                "horarioFeastivos": [],
                "limiteTiempo": {
                  "habilitado": true,
                  "timpoMax": 7200
                },
                "limiteAcompanante": {
                  "habilitado": true,
                  "acoMax": 3
                }
              }'
        ]);
    }

}
