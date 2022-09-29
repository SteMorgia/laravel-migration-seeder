<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('departures_station', 255);
            $table->string('arrival_station', 255);
            $table->dateTime('departures_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('train_carriages');
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
        Schema::dropIfExists('trains');
    }
}
