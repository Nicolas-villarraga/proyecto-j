<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombreproducto',
        'descripcionproducto',
        'preciocompra',
        'precioventa',
        'cantidadproducto',
        'id_Proveedor',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class,'id_Proveedor');
    }
}
