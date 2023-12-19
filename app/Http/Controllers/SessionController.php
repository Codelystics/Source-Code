<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    //
    public function loginPage(){
        return view("Login.index");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email',
            'password.required' => 'Please enter your password',
        ]);
        
        $remember = $request->input('remember'); 
        if (Auth::attempt($credentials, $remember)) {

            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', "Logout");
    }
    public function registPage(){
        return view("Register.index");
    }

    public function createUser(Request $request){
        $request->validate([
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ], [
            'username.required' => 'Please enter your username',
            'username.unique' => 'Username already taken',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email',
            'email.unique' => 'Email is already in use',
            'password.required' => 'Please enter your password',
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);
        return redirect(Route("login"))->with('success', "User Created Successfully");;
    }
}
