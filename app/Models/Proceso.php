<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;
   
   
    protected $fillable = [
        'fechaproceso',
        'observacionesproceso',
        'id_Doctor',
        'id_Historiaclinica',
    ];

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class,'id_Doctor'); 

    }
    
    public function historia()
    {
        return $this->belongsTo(Historiaclinica::class,'id_Historiaclinica');
    }
}

