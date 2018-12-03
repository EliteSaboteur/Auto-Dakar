<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numar', 20);
            $table->string('marca', 30);
            $table->string('model', 30);
            $table->string('sasiu', 50);
            $table->unsignedSmallInteger('an');
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
        Schema::dropIfExists('automobil');
    }
}
