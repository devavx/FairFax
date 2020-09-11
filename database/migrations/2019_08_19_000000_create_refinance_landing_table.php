<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefinanceLandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refinance_landing', function (Blueprint $table){
            $table->id();
			$table->string('mortage_balance')->nullable();
			$table->string('active_military')->nullable();
			$table->string('mortage_type')->nullable();
			$table->string('additional_cash_out')->nullable();			
			$table->string('current_rate')->nullable();
			$table->string('state')->nullable();
			$table->string('name')->nullable();
			$table->string('credit_score')->nullable();
			$table->string('loan_taken_year')->nullable();
			$table->string('phone')->nullable();
            $table->string('email')->nullable();            
            //$table->timestamp('email_verified_at')->nullable();            
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
        Schema::dropIfExists('refinance_landing');
    }
}
