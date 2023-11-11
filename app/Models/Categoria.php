<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre', 'genero']; 

    public function productos(){
        return $this->hasMany(Producto::class);
    } 
}
