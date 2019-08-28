<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NomesPopulares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomes_populares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->string('nome_popular', 255);
            
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
        Schema::dropIfExists('nomes_populares');
    }
}
