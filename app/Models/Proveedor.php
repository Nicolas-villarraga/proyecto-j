<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
protected $fillable =[
    'nitproveedor',
    'direccionproveedor',
    'telefonoproveedor',
    'correoproveedor',
    'marcaproveedor',
    'nombreproveedor',
    'id_Producto',
];


}
