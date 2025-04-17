<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = ['usuario_id', 'publicacion_id', 'contenido'];
}
