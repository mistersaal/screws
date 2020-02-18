<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screw_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
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
                'screw_type_of_head_id',
                'screw_color_id',
                'screw_tip_id',
                'screw_diameter_id',
                'screw_slot_id',
            ], 'screw_type_parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screw_types');
    }
}
