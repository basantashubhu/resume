<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class MemberController extends Controller
{
	protected $path = 'users.profile.personal-info';

    public function show($id){
    	$user = Member::find($id);
    	return view($this->path.'.show', compact('user'));
    }

    public function edit(Member $personal_info){
    	return view($this->path.'.update', compact('personal_info'));
    }

    public function update(Request $request, Member $personal_info){
    	$this->validate($request, [
    		'title' => 'required|string',
            'firstname' => 'required|string',
    		'midname' => 'nullable|string',
    		'lastname' => 'required|string',
    		'email' => 'required|email|unique:members,email,'.authMember()->id,
    		'gender' => 'required|string',
    		'profession' => 'required|string',
    		'nationality' => 'required|string',
    	]);
    	$personal_info->fill($request->all());
    	$personal_info->update();
        \DB::table('users')->whereId($personal_info->user_id)->update([
            'email' => $request->email
        ]);
    }
}
