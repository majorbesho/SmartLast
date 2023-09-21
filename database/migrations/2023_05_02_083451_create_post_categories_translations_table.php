<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories_translations', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->text('smallContent');
            $table->unsignedBigInteger('post_categories_id')->unsigned();
            $table->unique(['post_categories_id', 'locale']);
            $table->foreign('post_categories_id')->references('id')->on('post_categories')->onDelete('cascade');
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
        Schema::dropIfExists('post_categories_translations');
    }
}
