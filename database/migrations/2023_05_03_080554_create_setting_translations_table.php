<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('WHATWEDO')->nullable();
            $table->string('OURMISSION')->nullable();
            $table->string('WHYCHOOSEUS')->nullable();
            $table->string('ProductsandServices')->nullable();
            $table->string('no1')->nullable();
            $table->string('text1')->nullable();
            $table->string('no2')->nullable();
            $table->string('text2')->nullable();
            $table->string('no3')->nullable();
            $table->string('text3')->nullable();
            $table->string('no4')->nullable();
            $table->string('text4')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('text5')->nullable();

            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->text('smallContent');
            $table->unique(['setting_id', 'locale']);
//unsignedBigInteger
            $table->unsignedBigInteger('setting_id')->unsigned();



            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');



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
        Schema::dropIfExists('setting_translations');
    }
}
