<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color');
            $table->float('length')->unsigned();
            $table->string('manufacturer');
            $table->string('type');
            $table->integer('amount')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_orders');
    }
}
