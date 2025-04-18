<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['usuario_id', 'publicacion_id', 'contenido'];

    public function Publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }
}
