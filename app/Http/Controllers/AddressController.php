<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Address;

class AddressController extends Controller
{
	protected $path = 'users.profile.address';

    public function show(Member $address){
    	$add = $address->addresse;
    	return $add ? view($this->path.'.show', compact('add')) : view($this->path.'.no-address');
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	$this->validateThis($request);
    	$add = new Address;
    	$add->fill($request->all());
    	$add->save();
    }


    public function edit(Address $address){
    	return view($this->path.'.update',compact('address'));
    }

    public function update(Request $request, Address $address){
    	$this->validateThis($request);
    	$address->fill($request->all());
    	$address->update();
    }

    public function destroy(Address $address){
    	$address->is_deleted = 1;
    	$address->update();
    }
    
    public function validateThis($request){
    	$this->validate($request, [
    		'type' => 'required|string',
    		'city' => 'required|string',
    		'country' => 'required|string',
    		'is_active' => 'required|boolean'
    	]);
    }
}
