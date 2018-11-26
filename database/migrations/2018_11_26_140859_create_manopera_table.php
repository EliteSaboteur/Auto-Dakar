<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManoperaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manopera', function (Blueprint $table) {
            $table->integer('interventie_id');
            $table->increments('id');

            $table->string('piesa');
            $table->string('actiune');
            $table->integer('tarif');
            $table->integer('ore');
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
        Schema::dropIfExists('manopera');
    }
}
