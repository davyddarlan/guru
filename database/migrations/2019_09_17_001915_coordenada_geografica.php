<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoordenadaGeografica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordenadas_geograficas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->string('coordenadas', 255);
            $table->boolean('nativa');

            $table->foreign('id_especie')
                ->references('id')->on('especies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
