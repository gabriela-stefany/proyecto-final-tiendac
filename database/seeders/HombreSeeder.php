<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HombreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias =[
            ['nombre'=> 'Camisetas', 'genero' => 'Hombre'],
            ['nombre'=> 'Pantalones', 'genero' => 'Hombre'],
            ['nombre'=> 'Chaquetas', 'genero' => 'Hombre'],
            //agregar mas en la cateroria de hombre 
        ];

        foreach ($categorias as $categoria){
            Categoria::create($categoria);
        }
    }
}
