<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('discreption')->nullable();
            $table->longText('photo');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('Caturl')->nullable();
            $table->string('sdate');
            $table->string('edate')->nullable();
            $table->integer('stock')->nullable()->default('0');
            $table->float('price')->nullable();
            $table->float('showPrice')->nullable();
            $table->float('periodID')->nullable();
            $table->enum('showx',['showin','notshow'])->default('showin');

            $table->string('groupProduct')->nullable();



            $table->string('supplier');

            $table->unsignedBigInteger('suppliers_id');
            $table->foreign('suppliers_id')->references('id')->on('suppliers')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_products');
    }
}
