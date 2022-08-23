<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('portada');
            $table->string('duracion');
            $table->text('sinopsis');
            $table->string('plataforma_link');
            $table->string('trailer_link');
            $table->string('año');

            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenidos');
    }
};
