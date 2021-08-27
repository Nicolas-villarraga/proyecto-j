<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_Especialidad',
        'fecha',
        'hora',
        'id_Doctor',
        'id_Paciente',
        'id_Estado',
    ];
}
