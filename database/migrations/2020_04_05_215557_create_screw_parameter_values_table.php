<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewParameterValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_parameter_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('screw_parameter_id');
            $table->string('value');
            $table->boolean('visible')->default(true);

            $table->foreign('screw_parameter_id')->references('id')->on('screw_parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screw_parameter_values');
    }
}
