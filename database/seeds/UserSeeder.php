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
            'nombre' =>'empresa',
            'apellido' => 'empresa',
            'nick' => 'EmpresarioSupremo',
            'image' => 'user-unknown.jpg',
            'email' => 'empresa@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => 'chileno',
            'telefono' => '+56956348257',
            'provider'=>'jumtours@.cl',
            'provider_id'=>'123456789',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 2,
            'nombre' => 'turista2',
            'apellido' => 'turista2',
            'nick' => 'TuristaSupremo2',
            'image' => 'user-unknown.jpg',
            'email' => 'turista2@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' =>'peruano',
            'telefono' => '+56942685326',
            'provider'=>'jumtours@.cl',
            'provider_id'=>'123456789',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 1,
            'nombre' =>'empresa2',
            'apellido' => 'empresa2',
            'nick' => 'EmpresarioSupremo2',
            'image' => 'user-unknown.jpg',
            'email' => 'empresa2@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => 'chileno',
            'telefono' => '+56956348257',
            'provider'=>'jumtours@.cl',
            'provider_id'=>'123456789',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 2,
            'nombre' => 'turista',
            'apellido' => 'turista',
            'nick' => 'TuristaSupremo',
            'image' => 'user-unknown.jpg',
            'email' => 'turista@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' =>'peruano',
            'telefono' => '+56942685326',
            'provider'=>'jumtours@.cl',
            'provider_id'=>'123456789',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'profile_id' => 3,
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'nick' => Str::random(5),
            'image' => 'user-unknown.jpg',
            'email' => Str::random(10).'@gmail.com',
            'fechaNacimiento' => '2020-06-16',
            'nacionalidad' => Str::random(10),
            'telefono' => '+56942685326',
            'provider'=>'jumtours@.cl',
            'provider_id'=>'123456789',
            'password' => Hash::make('admin123'),
        ]);
    }
}
