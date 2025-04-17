<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombre1', 'nombre2', 'apellido1', 'apellido2', 'correo', 'clave', 'rol', 'estado'];
}
