<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_grupo');
    }
};
