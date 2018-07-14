<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
    	'org_name',
    	'title',
    	'start_date',
    	'end_date',
    	'description',
    	'address',
    	'member_id'
    ];
}
