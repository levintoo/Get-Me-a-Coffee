<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100);
            $table->bigInteger('amount')->unsigned();
            $table->string('type',255)->comment('debit,credit');
            $table->string('transaction_id',255);
            $table->string('paymentMethod', 255);
            $table->string('paidTo',255);
            $table->string('purpose',256)->comment('reversal,withdrawal');
            $table->integer('status')->default('0')->comment('0 for waiting 1 for completed 2 for failed 3 for cancelled 4 for rejected')->unsigned();
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
        Schema::dropIfExists('transactions');
    }
}
