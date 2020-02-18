<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrewSlotsTable extends Migration
{
    public function up()
    {
        Schema::create('screw_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->boolean('visible')->default(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('screw_slots');
    }
}
