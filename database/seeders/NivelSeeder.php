<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) { 
            DB::table('nivel')->insert([
                'nivel' => $i,
                'nombre' => $i.'° Primaria',
            ]);
        }
        for ($i = 7; $i <= 11; $i++) { 
            DB::table('nivel')->insert([
                'nivel' => $i,
                'nombre' => ($i-6).'° Secundaria',
            ]);
        }
    }
}
