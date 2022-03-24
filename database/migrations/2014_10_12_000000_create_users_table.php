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
            $table->id();
            $table->string('userid',100);
            $table->string('name',250);
            $table->string('common_name',250);
            $table->string('username',250);
            $table->string('phone_number',100)->unique();
            $table->string('national_id',100)->unique();
            $table->string('category',100);
            $table->string('description',500);
            $table->string('email',100)->unique();
            $table->string('utype',100)->default('USR')->comment('USR for user and ADM for admin and Sec for secretary');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
