<?php

use App\Roles;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    private const ROLES = ['estudiante', 'profesor', 'admin'];
    private const ESTADOS = ['activo', 'eliminado', 'suspendido'];
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1', 50)->nullable(false);
            $table->string('nombre2', 50)->nullable(true);
            $table->string('apellido1', 70)->nullable(false);
            $table->string('apellido2', 70)->nullable(false);
            $table->string('correo', 225)->nullable(false)->unique();
            $table->string('clave', 225)->nullable(false);
            $table->enum('rol', self::ROLES)->default('estudiante');
            $table->enum('estado', self::ESTADOS)->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
