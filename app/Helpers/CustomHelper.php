<?php
use App\Country;
use App\City;

function authMember(){
	return auth()->user()->member ? auth()->user()->member
								  : auth()->user();
}
function fullname(){
	if(auth()->user()->member)
		return authMember()->firstname.' '.authMember()->midname.' '.authMember()->lastname;
	else
		return authMember()->name;
}
function gender($gen){
	if( $gen == 'M' )
		return 'Male';
	else if( $gen == 'F' )
		return 'Female';
	else
		return 'n/a';
}

function addressType(){
	$types = ['permanent', 'temporary'];
	return $types;
}

function contactType(){
	$types = ['home', 'office', 'mobile', 'telephone'];
	return $types;
}

function countries(){
	$countries = Country::all();
	return $countries;
}