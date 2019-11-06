<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolarProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date');
            $table->double('CloudCoverage');
            $table->double('Visibility');
            $table->float('Temperature');
            $table->float('DewPoint');
            $table->float('RelativeHumidity');
            $table->double('WindSpeed');
            $table->float('StationPressure');
            $table->float('Altimeter');
            $table->float('SolarEnergy');
            $table->timestamps();
        });
    }


        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public
        function down()
        {
            Schema::dropIfExists('solar_productions');
        }

}
