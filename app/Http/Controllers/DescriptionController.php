<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Description;

class DescriptionController extends Controller
{
    protected $path = 'users.profile.description';

    public function show(Member $description){
    	$desc = $description->description;
    	return $desc ? view($this->path.'.show', compact('desc')) : view($this->path.'.no-desc');
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	$this->validateThis($request);
    	$desc = new Description;
    	$desc->fill($request->all());
    	$desc->save();
    }

    public function edit(Description $description){
    	return view($this->path.'.update', compact('description'));
    }

    public function update(Request $request, Description $description){
    	$this->validateThis($request);
    	$description->fill($request->all());
    	$description->update();
    }

    public function destroy(Description $description){
    	$description->is_deleted = 1;
    	$description->update();
    }

    public function validateThis($request){
    	$this->validate($request, [
    		'description' => 'required|string|min:50'
    	]);
    }
}
