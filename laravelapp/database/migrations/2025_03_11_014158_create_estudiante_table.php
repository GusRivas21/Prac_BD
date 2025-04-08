<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id('id_estudiante');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email', 100)->unique();
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 20)->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
