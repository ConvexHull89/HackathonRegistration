<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'team_name' => ['required', 'string', 'max:255', 'unique:users'],
            'email_leader' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'string', 'regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\x]).+$/', 'confirmed'],
            'full_name' => ['required', 'string'],
            'wa_num' => ['required', 'string','min:9', 'unique:users'],
            'line_id' => ['required', 'string', 'unique:users'],
            'github' => ['required', 'string'],
            'birth_place' => ['required', 'string'],
            'birth_day' => ['required'], 
            'card' => ['required', 'mimes:jpg,pdf,png,jpeg'],
            'cv' => ['required', 'mimes:jpg,pdf,png,jpeg'],
          
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
        $request = request();
        if($request->hasFile('card')){
            $fileNameWithExt = $request->file('card')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('card')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('card')->storeAs('public/card', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        if($request->hasFile('cv')){
            $fileNameWithExtcv = $request->file('cv')->getClientOriginalName();
            $fileNamecv = pathinfo($fileNameWithExtcv, PATHINFO_FILENAME);
            $extensioncv = $request->file('cv')->getClientOriginalExtension();
            $fileNameToStorecv = $fileNamecv.'_'.time().'_'.'.'.$extensioncv;
            $pathcv = $request->file('cv')->storeAs('public/cv', $fileNameToStorecv);
        }else{
            $fileNameToStorecv = 'no-image.jpg';
        }

        return User::create([
            'team_name' => $data['team_name'],
            'email_leader' => $data['email_leader'],
            'password' => Hash::make($data['password']),
            'fullname' => $data['full_name'],
            'wa_num' => $data['wa_num'],
            'line_id' => $data['line_id'],
            'github' => $data['github'],
            'birth_place' => $data['birth_place'],
            'birth_day' => $data['birth_day'],
            'type' => $data['status'],
            'card' => $fileNameToStore,
            'cv' => $fileNameToStorecv,
            'payment_confirmation' => 'unverified',
        ]);
    }   
}
