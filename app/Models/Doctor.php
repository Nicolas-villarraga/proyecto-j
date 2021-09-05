<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombredoctor',
        'apellidodoctor',
        'id_Especialidad',
        'id_Tipodocumento',
        'documentodoctor',
        'correodoctor',
        'contraseña',
        'id_Genero',
        'id_Rol',
    ];

    public function Especialidad()
    {
      return $this->belongsTo(Especialidad::class,'id_Especialidad');
    }

    public function tipodocumento()
    {
      return $this->belongsTo(Tipodocumento::class,'id_Tipodocumento');
    }

    public function genero()
    {
      return $this->belongsTo(Genero::class,'id_Genero');
    }

    public function rol()
    {
      return $this-> belongsTo(Rol::class,'id_rol');
    }
}
