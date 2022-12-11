<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Register extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'no_hp' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|max:255'
        ]);

        $validated['password'] = password_hash($validated['password'], PASSWORD_DEFAULT);

        if(User::create($validated)){
            $request->session()->flash('RegisterSuccess', 'Pendaftaran Berhasil.');
            return redirect('/login');
        }else{
            $request->session()->flash('RegisterError', 'Pendaftaran Gagal.');
            return redirect('/register');
        }
    }
}
