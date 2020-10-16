<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Negocios\ActividadEco;

class ActividadEcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActividadEco::truncate();
        
        ActividadEco::create([
            'actividad' => 'Alojamiento'
        ]);
        
        ActividadEco::create([
            'actividad' => 'Turismo'
        ]);
        
        ActividadEco::create([
            'actividad' => 'Recreacion'
        ]);
        
        ActividadEco::create([
            'actividad' => 'Servicio de comidas'
        ]);
        
    }
}
