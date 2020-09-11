<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ContactEmail extends Model
{ 
	
    protected $fillable = [
        'Fname',
        'Lname',
        'email',
        'address',
        'city',
        'state',
        'phone',
        'alternate_phone',
        'best_time',        
        'contact_time',
     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'contact_email';
}