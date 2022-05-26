<?php

namespace App\Http\Controllers\Auth;

use App\Car;
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
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'car_brand' => ['required', 'string', 'max:255'],
            'car_model' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255']
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
        
        session()->put('name', $data['name']);
        session()->put('lname', $data['lname']);
        session()->put('email', $data['email']);
        session()->put('password', $data['password']);
        session()->put('phone', $data['phone']);

        session()->put('car_brand', $data['car_brand']);
        session()->put('car_model', $data['car_model']);
        session()->put('car_number', $data['car_number']);
        
        $user = User::create([
            'name' => $data['name'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone']
        ]); 
        if($user){
            $car = Car::create([
                'user_id' => $user->id,
                'car_brand' => $data['car_brand'],
                'car_model' => $data['car_model'],
                'car_number' => $data['car_number'],
            ]);
            if($car){
                return $user;
            }
        }
    }
}
