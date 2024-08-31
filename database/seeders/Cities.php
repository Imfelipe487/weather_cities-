<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Cities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
        [
            'city' => 'Londres',
            'description' => 'Capital del Reino Unido, famosa por su historia, cultura y puntos de interés como el Big Ben y el London Eye.',
            'simbol' => 'GBP'
        ],
        [
            'city' => 'New york',
            'description' => 'Conocida como "La Gran Manzana", es un centro mundial de finanzas, cultura y entretenimiento en los Estados Unidos.',
            'simbol' => 'USD'
        ],
        [
            'city' => 'Paris',
            'description' => 'Capital de Francia, famosa por su arte, moda y monumentos como la Torre Eiffel y el Louvre.',
            'simbol' => 'EUR'
        ],
        [
            'city' => 'Tokyo',
            'description' => 'Capital de Japón, una metrópolis vibrante conocida por su tecnología avanzada y cultura tradicional.',
            'simbol' => 'JPY'
        ],
        [
            'city' => 'Madrid',
            'description' => 'Capital de España, conocida por su rica historia, arte y su vida nocturna.',
            'simbol' => 'EUR'
        ]]);
    }
}
