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
            $table->bigInteger('screw_type_id')->unsigned();
            $table->bigInteger('screw_color_id')->unsigned();
            $table->bigInteger('screw_manufacturer_id')->unsigned();
            $table->bigInteger('screw_length_id')->unsigned();
            $table->bigInteger('amount')->unsigned()->default(0);
            $table->double('cost')->unsigned();
            $table->timestamps();

            $table->foreign('screw_type_id')
                ->references('id')
                ->on('screw_types')
                ->onDelete('cascade');
            $table->foreign('screw_color_id')
                ->references('id')
                ->on('screw_colors')
                ->onDelete('cascade');
            $table->foreign('screw_manufacturer_id')
                ->references('id')
                ->on('screw_manufacturers')
                ->onDelete('cascade');
            $table->foreign('screw_length_id')
                ->references('id')
                ->on('screw_lengths')
                ->onDelete('cascade');

            $table->unique([
                'screw_type_id',
                'screw_color_id',
                'screw_manufacturer_id',
                'screw_length_id'
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
