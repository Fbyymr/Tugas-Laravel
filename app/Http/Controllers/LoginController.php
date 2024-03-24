<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index' , [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/home');
        } else {
            return back()->withErrors(['username' => 'Username or password is incorrect']);
        }
    }
}
