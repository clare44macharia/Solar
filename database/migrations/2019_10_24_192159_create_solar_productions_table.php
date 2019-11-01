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
            $table->float('Altimeter');
            $table->float('InverterReading');
            $table->float('SolarEnergy');
            $table->integer('Year');
            $table->integer('Month');
            $table->integer('Day');
            $table->date('Date');
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
