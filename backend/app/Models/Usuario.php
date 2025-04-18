<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends User implements JWTSubject
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre1', 'nombre2', 'apellido1', 'apellido2', 'correo', 'clave', 'rol', 'estado'];
    protected $hidden = ['clave'];

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class) ;
    }

    public function getAuthIdentifierName()
    {
        return 'correo';
    }
    public function getAuthPassword()
    {
        return $this->clave;
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
