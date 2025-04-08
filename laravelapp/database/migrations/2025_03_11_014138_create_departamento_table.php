<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->id('id_departamento');
            $table->string('nombre', 100);
            $table->string('ubicacion', 100)->nullable();
            $table->unsignedBigInteger('id_facultad')->nullable();
            $table->foreign('id_facultad')->references('id_facultad')->on('facultad')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamento');
    }
};
