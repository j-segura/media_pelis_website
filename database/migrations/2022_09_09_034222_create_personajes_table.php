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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();

            $table->string('name', 45);
            $table->text('descripcion');

            $table->unsignedBigInteger('actor_id')->nullable();

            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('set null');

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
        Schema::dropIfExists('personajes');
    }
};