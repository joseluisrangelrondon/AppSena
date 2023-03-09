<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->string('encargado', 100);
            $table->string('OrdenSuministro', 100);
            $table->string('OrdenEntrada');
            $table->integer('cantidad');

            $table->foreignId('Inv_id')->constrained('materials');
            $table->foreignId('seccion_id')->constrained('seccions');          

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
        Schema::dropIfExists('almacens');
    }
}
