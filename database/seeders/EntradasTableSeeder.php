<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrada;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entrada::create([
            'user_id' =>  1, //ID de usuario.
            'titulo' => 'Tercer título',
            'imagen' => 'imagen3.jpg',
            'tag' => 'Etiqueta3',
            'contenido' => 'Este es el contenido del tercer registro',
        ]);
        Entrada::create([
            'user_id' =>  1, //ID de usuario.
            'titulo' => 'cuarto título',
            'imagen' => 'imagen4.jpg',
            'tag' => 'Etiqueta4',
            'contenido' => 'Este es el contenido del cuarto registro',
        ]);
    }
}
