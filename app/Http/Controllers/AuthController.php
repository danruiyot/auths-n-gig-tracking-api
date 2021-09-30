<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Cookie;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            return response([
                "message"=> "invalid credentials"
            ], 401);

        }
        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt', $token, 60*6); //6 hours
        return response([
            "message"=>"Succesful",
            'accessToken' => $token
            ])
        ->withCookie($cookie)
        ->withHeaders([
                'accessToken' => $token
            ]);
    }
    public function store(Request $request)
    {
        if ($this->checkUser($request->email) == false) {
            $message = array('success' => false, "message" => "failed, email already exist !" );
            return json_encode($message);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->avatar = $request->avatar;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->password = Hash::make($request->password);
        $user->save();

        // User::create($User);
        $message = array('success' => true, "message" => "Succesful" );
        return json_encode($message);
    }
    public function user()
    {
        return Auth::user();
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user_dat = array(
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password)
        );
        $user->update($user_dat);
        $message = array('success' => true, "message" => "Succesful" );
        return json_encode($message);
    }
    public function checkUser($email)
    {
        $user = User::where('email', '=', $email)->first();
        // dd(empty($user));
        return empty($user);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $message = array('success' => true, "message" => "Succesful" );
        return json_encode($message);
    }
    public function logout(Request $request)
    {
        $cookie = Cookie::forget('jwt');
        
        return response(["message"=>"logged out"])->withCookie($cookie);
    }
}
