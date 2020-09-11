<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseLandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_landing', function (Blueprint $table){
            $table->id();
			$table->string('found_a_home')->nullable();
			$table->string('signed_the_cotract')->nullable();
			$table->string('approx_purchase_price')->nullable();
			$table->string('working_with_realtor')->nullable();			
			$table->string('buying_state')->nullable();
			$table->string('mortage_type')->nullable();
			$table->string('active_military')->nullable();
			$table->string('put_down_amount')->nullable();
			$table->string('full_name')->nullable();
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
        Schema::dropIfExists('purchase_landing');
    }
}
