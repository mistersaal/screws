<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->unique()->nullable();
            $table->boolean('individual')->default(true);
            $table->bigInteger('screw_type_of_head_id')->unsigned();
            $table->bigInteger('screw_color_id')->unsigned();
            $table->bigInteger('screw_tip_id')->unsigned();
            $table->bigInteger('screw_diameter_id')->unsigned();
            $table->bigInteger('screw_slot_id')->unsigned();
            $table->boolean('visible')->default(true);

            $table->foreign('screw_type_of_head_id')
                ->references('id')
                ->on('screw_types_of_head');
            $table->foreign('screw_color_id')
                ->references('id')
                ->on('screw_colors');
            $table->foreign('screw_tip_id')
                ->references('id')
                ->on('screw_tips');
            $table->foreign('screw_diameter_id')
                ->references('id')
                ->on('screw_diameters');
            $table->foreign('screw_slot_id')
                ->references('id')
                ->on('screw_slots');

            $table->unique([
                'type',
                'individual',
                'screw_type_of_head_id',
                'screw_color_id',
                'screw_tip_id',
                'screw_diameter_id',
                'screw_slot_id',
            ], 'screw_config_parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screw_configs');
    }
}
