<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('userid',255);
            $table->string('name',255);
            $table->string('username',255);
            $table->string('phone',255)->unique();
            $table->string('national_id',255)->unique();
            $table->string('category',255);
            $table->string('about',2048);
            $table->string('utype',255)->default('USR')->comment('USR for user and ADM for admin and Sec for secretary');
            $table->string('status',255)->default('0')->comment('0 for created and 1 for completed and 3 for other');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
