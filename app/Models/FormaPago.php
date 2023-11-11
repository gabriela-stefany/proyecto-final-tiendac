<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function pedido()
    {
        return $this->belongsToMany(Pedido::class, 'forma_pago_pedido');
    }
} 
