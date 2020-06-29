<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'profile_id' => 1,
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => Str::random(10),
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 2,
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => Str::random(10),
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 3,
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => Str::random(10),
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
    }
}
