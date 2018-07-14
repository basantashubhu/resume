<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Address extends Model
{
    protected $fillable = [
    	'type',
    	'city',
    	'country',
    	'is_active',
    	'is_deleted',
    	'member_id',
    ];
}
