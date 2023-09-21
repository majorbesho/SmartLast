<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone')->unique();
            $table->timestamp('phoneOtp_verified_at')->nullable();
            $table->string('nationality')->nullable();
            $table->string('dateOfbarth')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('referral_code')->nullable();
			$table->string('ref_by')->nullable();
            $table->integer('no_of_refs')->nullable()->default('0');
            $table->integer('ref_level_id')->nullable()->default('0');
            //phone_verfiy
            $table->string('phone_verfiy')->nullable();
            //email_verfiy
            $table->integer('is_verified')->default(0);
            $table->enum('status',['active','inactive'])->default('active');
            //onesignal_device_id
            $table->string('onesignal_device_id')->nullable();
            $table->rememberToken();
            $table->string('emp_code')->nullable();
            $table->nestedSet();
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
        Schema::dropIfExists('users');
    }
}
