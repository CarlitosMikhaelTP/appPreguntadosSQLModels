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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id('id_pregunta');
            $table->string('pregunta');
            $table->string('estado');
            $table->unsignedBigInteger('id_especialidad')->unsigned();
            $table->foreign('id_especialidad')->references('id_especialidad')->on('especialidades')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_ciclo')->unsigned();
            $table->foreign('id_ciclo')->references('id_ciclo')->on('ciclo')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_modulo')->unsigned();
            $table->foreign('id_modulo')->references('id_modulo')->on('modulo')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
