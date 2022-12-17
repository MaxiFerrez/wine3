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
        Schema::create('cosechas', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('imagen');
            $table->string('subtitulo1', 535);
            $table->string('descripcion1');
            $table->string('subtitulo2');
            $table->string('descripcion2', 535);
            
            $table->string('subtitulo3');  // Subtitulo de la categoria de los datos de los NFT
            $table->string('descripcion3', 535);  // Caracteristicas de los NFT -Fecha-etc
            $table->string('link');  //url opensea
            
            
            

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
        Schema::dropIfExists('cosechas');
    }
};
