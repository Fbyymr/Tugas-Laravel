<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=> 'Register',
            'active'=> 'register'
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|Unique:users',
            'password' => 'required|min:5|max:255',
            'nama_lengkap' => 'required',
            'alamat' => 'required'

        ]);


        User::create($validatedData);


        

        return redirect('/login')->with('success', 'Registrasi berhasil silahlan login!');




        
    }
}