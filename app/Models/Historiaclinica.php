<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historiaclinica extends Model
{
    use HasFactory;
    protected $fillable =[
        'fechadecreacionhistoria',
        'descripcionhistoriaclinica',
        'id_Doctor',
        'id_Paciente',
    ];
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'id_Doctor');
    }

    public function paciente ()
    {
        return $this->belongsTo(Paciente::class,'id_Paciente');
    }

    public function proceso()
    {
        return $this->belongsToMany(Proceso::class,'id_Historiaclinica');
    }
}
