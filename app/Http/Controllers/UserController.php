<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required|unique:tb_user',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);

        $user = new User([
            'name'=> $request->name,
            'username'=>$request->username,
            'password'=>$request->password,
        ]);

        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success, Please Login');
    }

    public function login(){
        $data['title']= 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request){
        $request->validate([
            'username'=>'required|unique:tb_user',
            'password'=>'required',
        ]);

        
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success, Please Login');
    }
}
