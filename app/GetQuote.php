<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class GetQuote extends Model
{   
    protected $fillable = [
        'loan_type',
        'loan_amount',
        'property_value',
        'credit_score',
        'first_name',
        'last_name',
        'email',
        'phone',
        
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'customer_get_quote';
}