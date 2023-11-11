<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiñoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['nombre' => 'Camisas', 'genero' => 'Niño'],
            ['nombre' => 'Zapatos', 'genero' => 'Niño'],
            ['nombre' => 'Pantalones', 'genero' => 'Niño'],
        ];

        foreach ($categorias as $categoria){
            Categoria::create($categoria);
        }
    }
}
