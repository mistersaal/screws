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
            $table->unsignedBigInteger('screw_config_id')->nullable();
            $table->boolean('visible')->default(true);
            $table->timestamps();

            $table->foreign('screw_config_id')
                ->references('id')
                ->on('screw_configs');
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
