<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('codigo', 10)->unique();
            $table->string('nombre', 100);
            $table->integer('creditos');
            $table->unsignedBigInteger('id_profesor')->nullable();
            $table->foreign('id_profesor')->references('id_profesor')->on('profesor')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('curso');
    }
};
