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
        Schema::create('registro_cursos', function (Blueprint $table) {
            $table->id("registro_curso_id");
            $table->foreignId("curso_id")->constrained("cursos");
            $table->foreignId("estudiante_id")->constrained("estudiantes");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_cursos');
    }
};
