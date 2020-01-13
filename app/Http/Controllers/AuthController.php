<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{

   /* protected function redirectTo()
    {
        if(Auth::user()->user_group == 1)
        {
            return view('admin.index');
        } else {
            return view('home');
        }
    }*/

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {

           /* auth()->user()->generateApiToken()->save();*/

            return redirect()->intended('/');

        } else {

            return redirect()->route('auth.login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        $name = auth()->user()->name;
        auth()->logout();

        return redirect()->route('home');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'accept_terms' => 'accepted',
        ]);

        $user = User::create($request->all());

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Welcome');
    }
 
}
