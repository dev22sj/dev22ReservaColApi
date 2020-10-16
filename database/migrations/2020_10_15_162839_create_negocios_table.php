<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->integer('act_economica'); // relacion tabla actividad_ecos
            $table->string('codigo_dep');
            $table->string('codigo_mun');
            $table->text('direccion');
            $table->double('latitud');
            $table->double('longitud');
            $table->integer('capacidad');
            $table->integer('aforo_per'); // relacion tabla aforo_permitido
            $table->text('validaciones');
            $table->integer('usuario_cre')->nullable();
            $table->integer('usuario_act')->nullable();
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
        Schema::dropIfExists('negocios');
    }
}
