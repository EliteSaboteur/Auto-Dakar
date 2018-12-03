<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');

            $table->string('denumire');
            $table->string('telefon', 20)->nullable();
            $table->string('cnp/cui');

            $table->string('regcom')->nullable();
            $table->string('seria')->nullable();
            $table->string('numar')->nullable();
            $table->string('eliberat_de')->nullable();
            $table->string('reprezentant')->nullable();

            $table->string('adresa')->nullable();
            $table->string('judet')->nullable();
            $table->string('cont')->nullable();
            $table->string('banca')->nullable();

            $table->string('email',50)->nullable();
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
        Schema::dropIfExists('client');
    }
}
