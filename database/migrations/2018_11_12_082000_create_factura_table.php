<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serie_factura');
            $table->integer('nr_factura');
            $table->date('data_eliberare');
            $table->unsignedInteger('chitanta_id')->nullable();
            $table->timestamps();
            //has one
            $table->foreign('chitanta_id')->references('id')->on('chitanta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
