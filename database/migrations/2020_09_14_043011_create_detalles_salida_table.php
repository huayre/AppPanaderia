<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_salida', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('salida_id')->unsigned();;
            $table->bigInteger('article_id')->unsigned();;
            $table->integer('cantidad_salida');
            $table->foreign('salida_id')->references('id')->on('salidas')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
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
        Schema::dropIfExists('detalles_salida');
    }
}
