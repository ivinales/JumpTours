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
            'nombre' =>'ian',
            'apellido' => 'viñales',
            'image' => 'user-unknown.jpg',
            'email' => 'ian@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => 'chileno',
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 2,
            'nombre' => 'sebastian',
            'apellido' => 'ortiz',
            'image' => 'user-unknown.jpg',
            'email' => 'seba@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' =>'peruano',
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 3,
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'image' => 'user-unknown.jpg',
            'email' => Str::random(10).'@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => Str::random(10),
            'telefono' => '+56942685326',
            'password' => Hash::make('admin123'),
        ]);
    }
}
