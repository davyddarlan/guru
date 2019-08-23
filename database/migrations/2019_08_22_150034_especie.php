<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Especie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_cientifico', 255);
            $table->string('descobridor', 255)->nullable();
            $table->date('data_descoberta')->nullable();
            $table->string('estado_conservacao', 2)->nullable();
            $table->string('codigo_internacional_especie', 6)->nullable()->unique();
            $table->softDeletes();
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
