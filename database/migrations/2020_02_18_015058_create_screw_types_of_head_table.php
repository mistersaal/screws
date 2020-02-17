<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewTypesOfHeadTable extends Migration
{
    public function up()
    {
        Schema::create('screw_types_of_head', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('name')->unique()->unsigned();
            $table->boolean('visible')->default(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('screw_types_of_head');
    }
}
