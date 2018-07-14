<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Experience;

class ExperienceController extends Controller
{
    protected $path = 'users.profile.experience';

    public function show(Member $experience){
    	$exp = $experience->experiences()->get();
    	return view($this->path.'.show',compact('exp'));
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	// dd($request->all());
    	$this->validateThis($request);
    	$epx = new Experience;
    	$epx->fill($request->all());
    	$epx->save();
    }

    public function edit(Experience $experience){
    	return view($this->path.'.update', compact('experience'));
    }

    public function update(Request $request, Experience $experience){
    	$this->validateThis($request);
    	$experience->fill($request->all());
    	$experience->update();
    }

    public function destroy(Experience $experience){
    	$experience->is_deleted=1;
    	$experience->update();
    }

    public function validateThis($request){
    	$this->validate($request, [
    		'title' => 'required|string',
    		'org_name' => 'required|string',
    		'start_date' => 'date',
    		'end_date' => 'date|after:start_date',
    		'address' => 'required|string',
    		'description' => 'required|string|max:255|min:5'
    	]);
    }
}
