<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $fillable = ['usuario_id', 'publicacion_id', 'contenido'];
    protected $table = 'preguntas';

    public function Publicacion()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
