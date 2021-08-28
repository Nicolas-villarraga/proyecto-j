<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombreespecialidad',
    ];

    
    public function cita()
    {
        return $this->belongsTo('App\Models\Cita');
    }
}
