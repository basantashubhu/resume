<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class PictureController extends Controller
{
    public function show(Member $picture){
    	$pic = $picture->pictures();
    	return new \Respnose::file( $pic, 200);
    }
}
