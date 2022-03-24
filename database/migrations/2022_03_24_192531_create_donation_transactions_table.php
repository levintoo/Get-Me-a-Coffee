<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100);
            $table->string('donorid',100)->nullable();
            $table->bigInteger('amount')->unsigned();
            $table->string('type')->comment('debit,credit');
            $table->string('transaction_id');
            $table->string('purpose',256)->comment('donation,withdrawal');
            $table->integer('status')->default('0')->comment('0 for waiting 1 for completed 2 for failed 3 for cancelled 4 for rejected')->unsigned();
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
        Schema::dropIfExists('donation_transactions');
    }
}
