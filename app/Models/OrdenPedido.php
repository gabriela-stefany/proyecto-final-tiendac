<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenPedido extends Model
{ 
    use HasFactory;

    protected $fillable = ['user_id', 'cantidad_total', 'fecha_pedido'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function DetalleOrden()
    {
        return $this->hasMany(DetalleOrden::class);
    }

    public function formaPago()
    {
        return $this->belongsToMany(FormaPago::class, 'forma_pago_pedido');
    }
}
