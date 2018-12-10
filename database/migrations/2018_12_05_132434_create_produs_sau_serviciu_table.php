<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdusSauServiciuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produs_sau_serviciu', function (Blueprint $table) {
            $table->unsignedInteger('interventie_id')->nullable();
            $table->increments('id');
            $table->string('tip');
            $table->string('denumire');
            $table->integer('cantitate/tarif');
            $table->double('pret/ore');
            $table->timestamps();
            //belongs to
            $table->foreign('interventie_id')->references('id')->on('interventie');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produs_sau_serviciu');
    }
}
