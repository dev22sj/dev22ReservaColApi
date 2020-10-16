<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AforoPer;

class AforoPerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AforoPer::truncate();
        
        AforoPer::create([
            'porcentaje' => 0.5
        ]);
    }
}
