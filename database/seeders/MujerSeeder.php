<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MujerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias =[
            ['nombre' => 'Vestidos', 'genero' => 'Mujere'],
            ['nombre' => 'Pantalones', 'genero' => 'Mujere'],
            ['nombre' => 'Blusas', 'genero' => 'Mujere'],
            //agregar mas en la categoria de mujer
        ];

        foreach ($categorias as $categoria){
            Categoria::create($categoria);
        }
    }
}
