<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolarPredictions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_predictions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('CloudCoverage');
            $table->double('Visibility');
            $table->float('Temperature');
            $table->float('DewPoint');
            $table->float('RelativeHumidity');
            $table->double('WindSpeed');
            $table->float('StationPressure');
            $table->float('Altimeter');
            $table->float('PredictedSolarEnergy');
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
        //
    }
}
