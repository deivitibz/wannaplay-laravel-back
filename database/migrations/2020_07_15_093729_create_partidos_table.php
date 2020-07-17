<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->string('deporte');
            $table->string('id_jugador_A1');
            $table->string('id_jugador_A2');
            $table->string('id_jugador_B1');
            $table->string('id_jugador_B2');
            $table->date('fecha');
            $table->integer('niveles');
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
        Schema::dropIfExists('partidos');
    }
}
