<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventie', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_intrare');
            $table->double('suma')->nullable();
            $table->string('observatii',255)->nullable();
            $table->integer('automobil_id');
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
        Schema::dropIfExists('interventie');
    }
}
