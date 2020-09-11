<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class HomePurchase extends Model
{   
    protected $fillable = [
        'property_type',
        'property_use',
        'credit_score',
        'already_found_home',
        'estimated_purchase_price',
        'downpayment',
        'military_service',
        'expected_buy_time',
        'contact_time',
        'contact_time',
        'first_name',
        'last_name',
        'email',
        'phone',
        'alternate_phone',
        
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'home_purchase';
}