<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable =[
        'fechapedido',
        'horapedido',
        'totalpedido',
        'observacionespedido',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pedido::class,'id_Paciente');
    }
}
