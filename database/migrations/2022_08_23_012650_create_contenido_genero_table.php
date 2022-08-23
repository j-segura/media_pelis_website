<?php

use App\Models\Contenido;
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
        Schema::create('contenido_genero', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('contenido_id');
            $table->unsignedBigInteger('genero_id');

            $table->foreign('contenido_id')->references('id')->on('contenidos')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');

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
        Schema::dropIfExists('contenido_genero');
    }
};
