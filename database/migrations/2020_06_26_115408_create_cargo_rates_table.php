<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('origin');
            $table->string('destination');
            $table->string('route');
            $table->string('trucktype');
            $table->string('cargoname');
            $table->decimal('rate',9,2);
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
        Schema::dropIfExists('cargo_rates');
    }
}
