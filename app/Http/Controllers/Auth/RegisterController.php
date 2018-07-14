<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * @param  object User
     * @return VOID
     */
    protected function createMember($user) {
        $mem = new \App\Member;
        $name = explode(' ', $user->name);
        if(count($name) > 3):
            $mem->firstname = $name[0].' '.$name[1]; array_forget($name, 0); array_forget($name, 1);
            $mem->midname = $name[2]; array_forget($name, 2);
            $mem->lastname = implode(' ', $name);
        elseif(count($name) > 2):
            $mem->firstname = $name[0]; 
            $mem->midname = $name[1]; 
            $mem->lastname = $name[2];
        elseif(count($name) > 1):
            $mem->firstname = $name[0]; 
            $mem->lastname = $name[1];
        else:
            $mem->firstname = $name[0];
        endif; 
        $mem->email = $user->email;
        $mem->user_id = $user->id;
        $mem->save();
    }
}
