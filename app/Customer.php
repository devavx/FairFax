<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{   
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'state',
        'loan_purpose',
        'current_have_loan',
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'Customer_information';
}