<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'nombre'=>'Estructura de datos',
            'autor'=>'Luis Joyanes',
        ]);

        DB::table('libro')->insert([
            'nombre'=> 'Pensandolo bien pense mal',
            'autor'=> 'Jose Madero',
        ]);
    }
}
