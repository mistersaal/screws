<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewScrewParameterValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_screw_parameter_value', function (Blueprint $table) {
            $table->unsignedBigInteger('screw_id');
            $table->unsignedBigInteger('screw_parameter_value_id');

            $table->foreign('screw_id', 'sspv_screw_id')
                ->references('id')
                ->on('screws')
                ->onDelete('cascade');
            $table->foreign('screw_parameter_value_id', 'sspv_screw_parameter_value_id')
                ->references('id')
                ->on('screw_parameter_values')
                ->onDelete('cascade');
            $table->primary(['screw_id', 'screw_parameter_value_id'], 's_spv_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screw_screw_parameter_value');
    }
}
