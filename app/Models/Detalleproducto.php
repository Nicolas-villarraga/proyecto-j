<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleproducto extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombreproducto',
        'descripcionproducto',
        'cantidadproducto',
        'valorproducto',
        'id_Pedido',
        'id_Paciente',
        'id_Estado',
        'id_Producto',
    ];
}
