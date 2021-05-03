<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscalaTable extends Migration
{
    public function up()
    {
        Schema::create('escala', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionario');
			$table->unsignedBigInteger('centro_custo_id');
            $table->foreign('centro_custo_id')->references('id')->on('centro_custo');
			$table->string('mes');
			$table->string('ano');
			$table->string('dia1');
			$table->string('dia2');
			$table->string('dia3');
			$table->string('dia4');
			$table->string('dia5');
			$table->string('dia6');
			$table->string('dia7');
			$table->string('dia8');
			$table->string('dia9');
			$table->string('dia10');
			$table->string('dia11');
			$table->string('dia12');
			$table->string('dia13');
			$table->string('dia14');
			$table->string('dia15');
			$table->string('dia16');
			$table->string('dia17');
			$table->string('dia18');
			$table->string('dia19');
			$table->string('dia20');
			$table->string('dia21');
			$table->string('dia22');
			$table->string('dia23');
			$table->string('dia24');
			$table->string('dia25');
			$table->string('dia26');
			$table->string('dia27');
			$table->string('dia28');
			$table->string('dia29');
			$table->string('dia30');
			$table->string('dia31');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escala');
    }
}
