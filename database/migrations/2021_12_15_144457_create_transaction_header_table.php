<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_header', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('card_country');
            $table->integer('expired_month');
            $table->integer('expired_year');
            $table->integer('cvc');
            $table->integer('postal_code');
            $table->string('checkout_status');
            $table->double('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_header');
    }
}
