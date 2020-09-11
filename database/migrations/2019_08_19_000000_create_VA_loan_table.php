<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVALoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VA_loan', function (Blueprint $table){
            $table->id();
			$table->string('loan_type')->nullable();
			$table->string('property_type')->nullable();
			$table->string('property_use')->nullable();
			$table->string('credit_score')->nullable();			
			$table->string('already_found_home')->nullable();
			$table->string('estimated_purchase_price')->nullable();
			$table->string('Downpayment')->nullable();
			$table->string('military_service')->nullable();
			$table->string('expected_buy_time')->nullable();
			$table->string('contact_time')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('alternate_phone')->nullable();
			$table->string('address')->nullable();
			$table->string('zip')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
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
        Schema::dropIfExists('VA_loan');
    }
}
