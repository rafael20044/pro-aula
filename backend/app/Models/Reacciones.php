<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reacciones extends Model
{
    protected $fillable = ['usuario_id', 'publicacion_id', 'comentario_id', 'tipo'];
}
