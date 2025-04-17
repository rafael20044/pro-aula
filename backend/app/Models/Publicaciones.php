<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $fillable = ['usuario_id', 'etiqueta_id', 'titulo', 'contenido', 'estado'];
}
