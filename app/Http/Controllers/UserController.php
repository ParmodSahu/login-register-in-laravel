<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function checkUser(Request $requset){
        $data=$requset->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function register(){
        return view('register');
    }
    public function registerUser(Request $requset){
        
        $data=$requset->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        $data['password'] = Hash::make($data['password']);
        $user=User::create($data);
        if($user){
            return redirect()->route('login');
        }
    }
    public function dashboard(){
        if(Auth::check())
        {
            return view('dashboard');
        }
        else{
            return redirect()->route('login');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
