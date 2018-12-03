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
            $table->unsignedInteger('automobil_id')->nullable();

            $table->increments('id');
            $table->date('data_estimativa');
            $table->double('cost_estimativ');

            $table->date('data_receptie');
            $table->integer('numar_receptie');
            $table->longText('lucrari_estimative');

            $table->string('observatii',255)->nullable();
            $table->smallInteger('status')->nullable();
            $table->smallInteger('vizibilitate');

            $table->unsignedInteger('factura_id')->nullable();
            $table->unsignedInteger('client_id')->nullable();
            $table->timestamps();
            //belongs to
            $table->foreign('automobil_id')->references('id')->on('automobil');
            //has one
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreign('client_id')->references('id')->on('client');

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
