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
            'nombre' => 'empresa',
            'estado' => 1,
        ]);

        DB::table('profiles')->insert([
            'nombre' => 'turista',
            'estado' => 1,
        ]);
        DB::table('profiles')->insert([
            'nombre' => 'administrador',
            'estado' => 1,
        ]);
    }
}
