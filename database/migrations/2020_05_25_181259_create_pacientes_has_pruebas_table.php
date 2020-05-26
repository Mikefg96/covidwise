<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesHasPruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes_has_pruebas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('idPaciente')->unsigned();
            $table->foreign('idPaciente')->references('id')->on('pacientes')->onDelete('cascade');

            $table->bigInteger('idPrueba')->unsigned();
            $table->foreign('idPrueba')->references('id')->on('pruebas')->onDelete('cascade');
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
        Schema::dropIfExists('pacientes_has_pruebas');
    }
}
