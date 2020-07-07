<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->insert([
            'nombre' => 'Empresario',
            'estado' => 1,
        ]);

        DB::table('profiles')->insert([
            'nombre' => 'Turista',
            'estado' => 1,
        ]);
        DB::table('profiles')->insert([
            'nombre' => 'Administrador',
            'estado' => 1,
        ]);
    }
}
