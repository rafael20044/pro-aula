<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferencias extends Model
{
    protected $fillable = ['usuario_id', 'etiqueta_id'];
}
