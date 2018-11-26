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
            $table->integer('automobil_id');

            $table->increments('id');
            $table->date('data_estimativa');
            $table->double('cost_estimativ');

            $table->date('data_reparatie');
            $table->integer('numar_reparatie');
            $table->longText('lucrari_estimative');

            $table->string('email',50);
            $table->string('observatii',255)->nullable();

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
