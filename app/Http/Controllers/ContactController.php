<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Contact;

class ContactController extends Controller
{
    protected $path = 'users.profile.contact';

    public function show(Member $contact){
    	$con = $contact->contact;
    	return $con ? view($this->path.'.show', compact('con')) : view($this->path.'.no-contact');
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	$this->validateThis($request);
    	$con = new Contact;
    	$con->fill($request->all());
    	$con->save();
    }

    public function edit(Contact $contact){
    	return view($this->path.'.update', compact('contact'));
    }

    public function update(Request $request, Contact $contact){
    	$this->validateThis($request);
    	$contact->fill($request->all());
    	$contact->update();
    }

    public function destroy(Contact $contact){
    	$contact->is_deleted = 1;
    	$contact->update();
    }

    public function validateThis($request){
    	$this->validate($request, [
    		'type' => 'required|string',
    		'contact' => 'required|string|min:6',
    		'is_active' => 'required|boolean'
    	]);
    }
}
