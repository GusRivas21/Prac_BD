<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id('id_inscripcion');
            $table->unsignedBigInteger('id_estudiante')->index();
            $table->unsignedBigInteger('id_curso')->index();
            $table->date('fecha_inscripcion');
            $table->float('calificacion')->nullable();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiante')->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');

            $table->unique(['id_estudiante', 'id_curso']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
};
