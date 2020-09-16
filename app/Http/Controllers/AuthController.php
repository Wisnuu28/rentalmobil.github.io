<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
    return view('auth.login');
    }

    public function loginpost(Request $request)
    {
        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->back();
        }
        return redirect('/dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }
    
    public function register_post(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
    }
    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
