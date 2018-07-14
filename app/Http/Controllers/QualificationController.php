<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Qualification;

class QualificationController extends Controller
{
    protected $path = 'users.profile.qualification';

    public function show(Member $qualification){
    	$qual = $qualification->qualifications()->get();
    	return view($this->path.'.show', compact('qual'));
    }

    public function create(){
    	return view($this->path.'.store');
    }

    public function store(Request $request){
    	// dd($request->all());
    	$this->validateThis($request);
    	$qua = new Qualification;
    	$qua->fill($request->all());
    	$qua->save();
    }

    public function edit(Qualification $qualification){
    	return view($this->path.'.update', compact('qualification'));
    }

    public function update(Request $request, Qualification $qualification){
    	$this->validateThis($request);
    	$qualification->fill($request->all());
    	$qualification->update();
    }

    public function destroy(Qualification $qualification){
    	$qualification->is_deleted=1;
    	$qualification->update();
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
