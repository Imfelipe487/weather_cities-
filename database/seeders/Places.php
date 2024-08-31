<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Places extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('place')->insert([
        [
            'name' => 'Big Ben',
            'description' => 'El famoso reloj y símbolo de Londres.',
            'imagen' => 'big_ben.jpg', 
            'placecity' => 1,
        ],
        [
            'name' => 'London Eye',
            'description' => 'Una enorme rueda de observación en la orilla del río Támesis.',
            'imagen' => 'london_eye.jpg',
            'placecity' => 1
        ],
        
        // Lugares para Nueva York
        [
            'name' => 'Estatua de la Libertad',
            'description' => 'Símbolo de la libertad en la entrada del puerto de Nueva York.',
            'imagen' => 'estatua_libertad.jpg',
            'placecity' => 2
        ],
        [
            'name' => 'Central Park',
            'description' => 'El parque urbano más famoso de Nueva York.',
            'imagen' => 'central_park.jpg',
            'placecity' => 2
        ],

        // Lugares para París
        [
            'name' => 'Torre Eiffel',
            'description' => 'El monumento más icónico de París y Francia.',
            'imagen' => 'torre_eiffel.jpg',
            'placecity' => 3
        ],
        [
            'name' => 'Louvre',
            'description' => 'El museo más grande del mundo, hogar de la Mona Lisa.',
            'imagen' => 'louvre.jpg',
            'placecity' => 3
        ],

        // Lugares para Tokio
        [
            'name' => 'Templo Senso-ji',
            'description' => 'El templo budista más antiguo de Tokio.',
            'imagen' => 'sensoji.jpg',
            'placecity' => 4
        ],
        [
            'name' => 'Shibuya Crossing',
            'description' => 'El cruce peatonal más famoso del mundo.',
            'imagen' => 'shibuya_crossing.jpg',
            'placecity' => 4
        ],

        // Lugares para Madrid
        [
            'name' => 'Puerta del Sol',
            'description' => 'Un famoso punto de referencia en el corazón de Madrid.',
            'imagen' => 'puerta_del_sol.jpg',
            'placecity' => 5
        ],
        [
            'name' => 'Museo del Prado',
            'description' => 'Uno de los museos de arte más importantes de España.',
            'imagen' => 'museo_prado.jpg',
            'placecity' => 5
        ]]);
    }
}
