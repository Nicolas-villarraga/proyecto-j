<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreproducto',
        'descripcionproducto',
        'cantidadproducto',
        'valorproducto',
        'id_Producto',
        'id_Pedido',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_Producto');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class,'id_Pedido'); 

    }
}
