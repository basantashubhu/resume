<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Interest;

class InterestController extends Controller
{
    protected $path = 'users.profile.interest';

    public function show(Member $interest){
    	$int = $interest->interests()->get();
    	return view($this->path.'.show', compact('int'));
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	$this->validateThis($request);
    	$int = new Interest;
    	$int->fill($request->all());
    	$int->save();
    }

    public function edit(Interest $interest){
    	return view($this->path.'.update', compact('interest'));
    }

    public function update(Request $request, Interest $interest){
    	$this->validateThis($request);
    	$interest->fill($request->all());
    	$interest->update();
    }

    public function destroy(Interest $interest){
    	$interest->is_deleted = 1;
    	$interest->update();
    }

    public function validateThis($request){
    	$this->validate($request, [
    		'title' => 'required|string',
    		'description' => 'required|string|max:255'
    	]);
    }
}
