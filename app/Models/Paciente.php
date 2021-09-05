<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombrepaciente',
        'apellidopaciente',
        'id_Tipodocumento',
        'documentopaciente',
        'correopaciente',
        'telefonopaciente',
        'acudientepaciente',
        'id_estado',
        'id_Genero',
    ];

    public function tipodocumento()
    {
       return $this->belongsTo(Tipodocumento::class,'id_Tipodocumento');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class,'id_Estado');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class,'id_Genero');
    }
}
