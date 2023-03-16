<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidad')->insert([
            'nombre' => 'Matutina ',
        ]);
        DB::table('modalidad')->insert([
            'nombre' => 'Vespertina ',
        ]);
        DB::table('modalidad')->insert([
            'nombre' => 'Nocturna ',
        ]);
        DB::table('modalidad')->insert([
            'nombre' => 'Mixta ',
        ]);
        DB::table('modalidad')->insert([
            'nombre' => 'Distancia ',
        ]);
        DB::table('modalidad')->insert([
            'nombre' => 'No Definida ',
        ]);

    }
}
