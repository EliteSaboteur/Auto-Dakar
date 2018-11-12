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
            $table->increments('counter_factura');
            $table->increments('counter_chitanta');
            $table->integer('nr_factura');
            $table->integer('nr_chitanta');
            $table->string('reprezinta');
            $table->timestamp('data_eliberarii');
            $table->integer('interventie_id');
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
        Schema::dropIfExists('factura');
    }
}
