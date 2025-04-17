<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    private const TIPOS = ['like', 'dislike'];
    public function up(): void
    {
        Schema::create('reacciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('publicacion_id')->nullable(true)->constrained('publicaciones');
            $table->foreignId('comentario_id')->nullable(true)->constrained('comentarios');
            $table->enum('tipo', self::TIPOS)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reacciones');
    }
};
