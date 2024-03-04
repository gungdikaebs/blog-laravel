<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "register",
            "active" => "register"
        ]);
    }
    public function store(Request $request)
    {
        $validetedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validetedData['password'] = bcrypt($validetedData['password']);

        User::create($validetedData);
        session()->flash('success', 'Registration Sucessfull! please login');
        return redirect('/login');
    }
}
