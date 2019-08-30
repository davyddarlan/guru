<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Galerias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->string('localizacao', 127);
            $table->string('titulo', 255);
            $table->string('descricao', 510);

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
        Schema::dropIfExists('galerias');
    }
}
