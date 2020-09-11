<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RefinanceLanding extends Model
{ 
	
    protected $fillable = [
        'mortage_balance',
        'active_military',
        'mortage_type',
        'additional_cash_out',
        'current_rate',
        'state',
        'name',
        'credit_score',
        'loan_taken_year',        
        'email',
        'phone',
     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'refinance_landing';
}