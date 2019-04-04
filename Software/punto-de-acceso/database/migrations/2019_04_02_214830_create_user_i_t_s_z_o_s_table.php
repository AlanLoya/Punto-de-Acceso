<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserITSZOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_i_t_s_z_o_s', function (Blueprint $table) {
          $table->bigIncrements('sid');
          $table->string("no_control");
          $table->string("nombre");
          $table->string("apellido");
          $table->string("tipo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_i_t_s_z_o_s');
    }
}
