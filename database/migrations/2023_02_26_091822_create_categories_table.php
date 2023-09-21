<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('discreption')->nullable();
            $table->string('photo');
            $table->enum('status',['active','inactive'])->default('active');
            $table->boolean('is_parent')->default(true);
            $table->unsignedBigInteger('parent_id')->nullable();;
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->string('Caturl')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
