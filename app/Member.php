<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Address;
use App\Contact;
use App\Description;
use App\Experience;
use App\Interest;
use App\Picture;
use App\Qualification;
use App\Skills;

class Member extends Model
{
    protected $fillable = [
    	'title',
    	'firstname',
    	'midname',
    	'lastname',
    	'email',
    	'nationality',
    	'profession',
    	'gender',
        'user_id'
    ];

    protected $nullable = [
        'title',
        'firstname',
        'midname',
        'lastname',
        'email',
        'nationality',
        'profession',
        'gender',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function contact(){
        return $this->hasOne(Contact::class);
    }

    public function description(){
        return $this->hasOne(Description::class);
    }

    public function experiences(){
        return $this->hasMany(Experience::class);
    }

    public function interests(){
        return $this->hasMany(Interest::class);
    }

    public function picture(){
        return $this->hasOne(Picture::class);
    }

    public function qualifications(){
        return $this->hasMany(Qualification::class);
    }

    public function skills(){
        return $this->hasMany(Skills::class);
    }
}
