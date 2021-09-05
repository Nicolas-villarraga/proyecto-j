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

    public function Especialidad()
    {
        return $this->belongsTo(Especialidad::class,'id_Especialidad');
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class,'id_Doctor'); 

    }
    
    public function Paciente()
    {
        return $this->belongsTo(Paciente::class,'id_Paciente');
    }
    public function Estado()
    {
        return $this->belongsTo(Estado::class,'id_Estado');
    }
}
