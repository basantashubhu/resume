<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['type', 'contact', 'is_active', 'member_id'];
}
