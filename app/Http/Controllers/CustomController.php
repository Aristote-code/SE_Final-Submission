<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomController extends Controller
{
    //
    public function signup(){
        return view('signup');
    }

    public function register(Request $request){
        
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'password'  =>  'required|min:6',
            'password_confirmation'  =>  'required|same:password'
        ]);

        User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'  =>  bcrypt($request->password)
        ]);


        return redirect()->route('signin')->with('success', 'User created successfully, please login to continue');
    }

    public function signin(){
        return view('signin');
    }

    public function login(Request $request){
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('chat');
        }

        return redirect()->route('signin')->with('error', 'Invalid credentials provided or user does not exist');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('signin');
    }


    public function chat(){
        if(Auth::check()) {
            return view('chat');
        }

        return redirect()->route('signin')->with('error', 'You need to login to access the chat page');
    }
}
