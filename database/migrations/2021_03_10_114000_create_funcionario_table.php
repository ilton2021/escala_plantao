<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nome');
			$table->string('cargo');
			$table->string('coren');
			$table->string('matricula');
			$table->unsignedBigInteger('centro_custo_id');
            $table->foreign('centro_custo_id')->references('id')->on('centro_custo');
			$table->string('tipo_plantao');
			$table->string('horario');
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
        Schema::dropIfExists('funcionario');
    }
}
