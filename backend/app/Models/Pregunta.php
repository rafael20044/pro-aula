<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = ['usuario_id', 'etiqueta_id', 'titulo', 'contenido', 'estado'];
    protected $table = 'preguntas';

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Respuesta::class);
    }
}
