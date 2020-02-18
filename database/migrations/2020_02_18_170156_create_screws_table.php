<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('screw_config_id')->unsigned()->nullable();
            $table->bigInteger('screw_length_id')->unsigned();
            $table->bigInteger('screw_manufacturer_id')->unsigned();
            $table->boolean('visible')->default(true);
            $table->timestamps();

            $table->foreign('screw_config_id')
                ->references('id')
                ->on('screw_configs');
            $table->foreign('screw_length_id')
                ->references('id')
                ->on('screw_lengths');
            $table->foreign('screw_manufacturer_id')
                ->references('id')
                ->on('screw_manufacturers');

            $table->unique([
                'screw_config_id',
                'screw_length_id',
                'screw_manufacturer_id',
            ], 'screw_parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screws');
    }
}
