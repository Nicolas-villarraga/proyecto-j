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
        'id_Genero',
    ];
}
