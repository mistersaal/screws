<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewConfigScrewParameterValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_config_screw_parameter_value', function (Blueprint $table) {
            $table->unsignedBigInteger('screw_config_id');
            $table->unsignedBigInteger('screw_parameter_value_id');

            $table->foreign('screw_config_id', 'scspv_screw_config_id')
                ->references('id')
                ->on('screw_configs')
                ->onDelete('cascade');
            $table->foreign('screw_parameter_value_id', 'scspv_screw_parameter_value_id')
                ->references('id')
                ->on('screw_parameter_values')
                ->onDelete('cascade');
            $table->primary(['screw_config_id', 'screw_parameter_value_id'], 'sc_spv_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screw_config_screw_parameter_value');
    }
}
