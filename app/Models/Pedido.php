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
        'id_Paciente',

    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'id_Paciente');
    }
}
