<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password')->nullable();
            $table->string('title');
            $table->string('contactNo');
            $table->string('company');
            $table->string('slug')->unique();
            $table->longText('discreption')->nullable();
            $table->longText('photo');
            $table->longText('resName');
            $table->longText('email')->unique();
            $table->longText('tele');
            $table->longText('web');
            $table->longText('nots');
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('suppliers');
    }
}
