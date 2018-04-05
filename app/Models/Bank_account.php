<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank_account extends Model
{

 	/*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'name',
	    'account',
	    'entity',
	    'type',
	    'customer_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
