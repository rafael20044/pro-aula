<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => 'Usuario no encontrado'], 404);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token inválido o ausente'], 401);
        }
    
        return response()->json([
            'message' => 'Hola ' . $user->name,
        ]);
        //return response()->json('soludar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre1' => 'required|string',
            'nombre2' => 'string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'correo' => 'required|email',
            'clave' => 'required'
        ]);

        $usuario = Usuario::create([
            'nombre1' => $request->nombre1,
            'nombre2' => $request->nombre2,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'correo' => $request->correo,
            'clave' => Hash::make($request->clave)
        ]);

        if ($usuario) {
            return response()->json(['mensaje' => 'usuario creado con exito', 'datos' => $usuario], 201);
        }
        return response()->json(['mensaje' => 'Error al crear el usuario'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuarios)
    {
        //
    }
}
