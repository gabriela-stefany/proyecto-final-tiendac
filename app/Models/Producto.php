<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ordenPedido()
    {
        return $this->hasMany(OrdenPedido::class);
    }

    public function detalleCarrito()
    {
        return $this->hasMany(DetalleCarrito::class);
    }

}
