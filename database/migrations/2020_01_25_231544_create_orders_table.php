<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('screw_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->float('price');
            $table->boolean('paid')->default(false);
            $table->string('payment_id')->nullable();
            $table->boolean('done')->default(false);
            $table->boolean('received')->default(false);
            $table->timestamps();

            $table->foreign('screw_id')
                ->references('id')
                ->on('screws');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
