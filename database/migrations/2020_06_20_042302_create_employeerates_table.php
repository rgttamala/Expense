<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeerates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('JobDescription');
            $table->decimal('Rate',9,2);
            $table->string('Frequency');
            $table->decimal('sss',9,2);
            $table->decimal('pagibig',9,2);
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
        Schema::dropIfExists('employeerates');
    }
}
