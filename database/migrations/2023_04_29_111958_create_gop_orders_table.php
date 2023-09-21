<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGopOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gop_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gop_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('qty')->default(0);
            $table->foreign('gop_id')->on('group_products')->references('id')->onDelete('CASCADE ');
            $table->foreign('order_id')->on('orders')->references('id')->onDelete('CASCADE');
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
        Schema::dropIfExists('gop_orders');
    }
}
