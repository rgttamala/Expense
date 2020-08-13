<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('ContactNumber');
            $table->string('HomeAddress');
            $table->string('CurrentAddress');
            $table->string('Gender');
            $table->date('BirthDate');
            $table->integer('Age');
            $table->date('DateEmployed');
            $table->integer('JobRates_id')->unsigned();
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
        Schema::dropIfExists('employees');
    }
}
