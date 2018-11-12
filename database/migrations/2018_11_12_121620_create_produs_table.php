<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('denumire');
            $table->tinyInteger('um')->nullable();
            $table->tinyInteger('cantitate');
            $table->double('valoare');
            $table->integer('factura_id');
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
        Schema::dropIfExists('produs');
    }
}
