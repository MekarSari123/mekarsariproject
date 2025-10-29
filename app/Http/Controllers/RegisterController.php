<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index',
        [
            'title' => 'Register',
            'active' => 'register'
        ]
        );
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'username' => 'required|unique:users|max:255|min:3',
            'rt' => 'required|integer|unique:users',
            'password' => 'required|max:255|min:3'

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request ->session()->flash('success', 'Registrasi berhasil, silahkan masuk');

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan masuk');
    }

    
}
