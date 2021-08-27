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
        'id_Estado',
        'id_Genero',
    ];
}
