<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewConfigScrewParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_config_screw_parameter', function (Blueprint $table) {
            $table->unsignedBigInteger('screw_config_id');
            $table->unsignedBigInteger('screw_parameter_id');
            $table->primary(['screw_config_id', 'screw_parameter_id'], 'sc_sp_pk');
            $table->foreign('screw_config_id')->references('id')->on('screw_configs');
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
        Schema::dropIfExists('screw_config_screw_parameter');
    }
}
