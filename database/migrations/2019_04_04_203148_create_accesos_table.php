<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string("no_control");
          $table->string("nombre");
          $table->string("apellido");
          $table->string("tipo");
          $table->string("materia");
          $table->string("actividad");
          $table->string("entrada");
          $table->string("salida");
          $table->string("uso");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesos');
    }
}
