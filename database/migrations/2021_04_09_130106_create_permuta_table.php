<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermutaTable extends Migration
{
    public function up()
    {
        Schema::create('permuta', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('colaborador');
			$table->foreign('colaborador')->references('id')->on('funcionario');
			$table->integer('substituto');
			$table->integer('gestor');
			$table->unsignedBigInteger('escala_id');
			$table->foreign('escala_id')->references('id')->on('escala_mes_ano');
			$table->string('dia');
			$table->string('mes_ano');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permuta');
    }
}
