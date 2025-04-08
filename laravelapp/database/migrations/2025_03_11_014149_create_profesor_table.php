<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id('id_profesor');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('titulo', 50)->nullable();
            $table->string('email', 100)->unique();
            $table->unsignedBigInteger('id_departamento')->nullable();
            $table->foreign('id_departamento')->references('id_departamento')->on('departamento')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesor');
    }
};
