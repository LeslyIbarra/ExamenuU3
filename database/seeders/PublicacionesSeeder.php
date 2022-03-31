<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicaciones')->insert([
            
            'titulo' => 'Que es el lenguaje PERL',
            'autor' => 'Lesly Ibarra',
            'fecha' => '28/03/2022',
            'like' => '150'
            
        ]);
        DB::table('publicaciones')->insert([
            
            'titulo' => 'caracteristicas',
            'autor' => 'Lesly Ibarra',
            'fecha' => '28/03/2022',
            'like' => '150'
            
        ]);
        DB::table('publicaciones')->insert([
            
            'titulo' => 'ventajas y desventajas',
            'autor' => 'Lesly Ibarra',
            'fecha' => '28/03/2022',
            'like' => '350'
            
        ]);
        DB::table('publicaciones')->insert([
            
            'titulo' => 'logo',
            'autor' => 'Lesly Ibarra',
            'fecha' => '28/03/2022',
            'like' => '150'
            
        ]);
    }
}
