<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Skills;

class SkillsController extends Controller
{
    protected $path = 'users.profile.skill';

    public function show(Member $skill){
    	$skills = $skill->skills()->get();
    	return view($this->path.'.show', compact('skills'));
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	$this->validateThis($request);
    	$skill = new Skills;
    	$skill->fill($request->all());
    	$skill->save();
    }

    public function edit(Skills $skill){
    	return view($this->path.'.update', compact('skill'));
    }

    public function update(Request $request, Skills $skill){
    	$this->validateThis($request);
    	$skill->fill($request->all());
    	$skill->update();
    }

    public function destroy(Skills $skill){
    	$skill->is_deleted = 1;
    	$skill->update();
    }

    public function validateThis($request){
    	$this->validate($request, [
    		'title' => 'required|string',
    		'description' => 'required|string|max:255'
    	]);
    }
}
