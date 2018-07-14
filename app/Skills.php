<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = ['title', 'description', 'member_id'];
}
