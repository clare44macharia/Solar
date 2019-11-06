<?php

namespace solar\Http\Controllers\Auth;

use solar\User;
use solar\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \solar\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //make method allows you to manage the work factor of the algorithm using the rounds option;
           // $hashed = Hash::make('password', [
             // 'rounds' => 12

        'password' => Hash::make($data['password']),
          //  ])
     ]);
    }

//    public function edit(User $user)
//    {
//        $user = Auth::user();
//        return view('edit', compact('user'));
//    }
//
//    public function update(User $user)
//    {
//        $this->validate(request(), [
//            'name' => 'required',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|min:6|confirmed'
//        ]);
//
//        $user->name = request('name');
//        $user->email = request('email');
//        $user->password = bcrypt(request('password'));
//
//        $user->save();
//
//        return back();
//    }
}