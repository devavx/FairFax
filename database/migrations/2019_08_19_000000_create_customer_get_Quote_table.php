<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerGetQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_get_quote', function (Blueprint $table) {
            $table->id();
			$table->string('loan_type');
			$table->string('loan_amount');
			$table->string('property_value');
			$table->string('credit_score');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
			$table->string('phone');
			// $table->string('state');
			// $table->string('loan_purpose');
			// $table->string('current_have_loan');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
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
        Schema::dropIfExists('customer_get_quote');
    }
}
