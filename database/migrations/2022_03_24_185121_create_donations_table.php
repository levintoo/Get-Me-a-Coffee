<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100);
            $table->string('donorid',100);
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('phone_number',100);
            $table->string('message',250);
            $table->string('anonymous',100);
            $table->string('mode_of_payment',100);
            $table->string('transaction_id');
            $table->bigInteger('amount')->unsigned();
            $table->string('status')->default('0')->comment('');
            $table->date('donated_at')->format('Y/m/d H:i:s');
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
        Schema::dropIfExists('donations');
    }
}
