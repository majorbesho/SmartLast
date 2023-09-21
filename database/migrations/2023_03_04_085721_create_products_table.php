<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('summary')->nullable();
            $table->longText('discreption')->nullable();
            $table->integer('stok')->default(0);
            $table->unsignedBigInteger('cat_id');

            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('child_cat_id')->nullable();
            $table->unsignedBigInteger('group_products_id')->nullable();
            $table->foreign('group_products_id')->references('id')->on('group_products')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->string('photo');
            $table->enum('status',['active','inactive'])->default('active');
            $table->enum('conditaion',['new','popular','winter','summary'])->default('new');
            $table->float('price')->default(0);
            $table->float('offer_price')->default(0);
            $table->float('discount')->default(0);
            $table->string('Caturl')->nullable();
            $table->string('type')->nullable();
            //chk
            $table->boolean('chk')->default(false);
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
        Schema::dropIfExists('products');
    }
}
