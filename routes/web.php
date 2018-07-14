<?php

Route::get('/', function () {
	$subs = \DB::table('users')->get()->count();
    return view('welcome', compact('subs'));
});

Route::get('/logout', function(){
	return redirect()->back();
});

Route::get('/timeline', function(){
	return view('users.timeline.index');
})->middleware('auth');

Route::get('/profile', function(){
	$user = DB::table('members')->whereId(authMember()->id)->first();
	return view('users.profile.index', compact('user'));
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/personal-info', 'MemberController')->middleware('auth');
Route::resource('/address', 'AddressController')->middleware('auth');
Route::resource('/description', 'DescriptionController')->middleware('auth');
Route::resource('/experience', 'ExperienceController')->middleware('auth');
Route::resource('/interest', 'InterestController')->middleware('auth');
Route::resource('/picture', 'PictureController')->middleware('auth');
Route::resource('/contact', 'ContactController')->middleware('auth');
Route::resource('/qualification', 'QualificationController')->middleware('auth');
Route::resource('/skill', 'SkillsController')->middleware('auth');

Route::get('/templates', function(){
	return view('users.templates.index');
});

Route::get('/export-pdf/{id}', 'PDFController@indexP')->middleware('auth');

Route::get('/export/{id}', 'PDFController@preview')->middleware('auth');
