<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Geral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->float('tamanho', 8, 2);
            $table->float('peso', 8, 2);
            $table->string('unidade_metrica', 60);
            $table->string('comportamento_social', 255);

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
